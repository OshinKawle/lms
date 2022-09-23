<?php

namespace App\Http\Controllers;

# Models
use App\Models\User;

# Other Classes
use DB;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    #Bind User model
    protected $user;


    /**
      * Defining the default constructor for controller
      *
      */
    public function __construct(
                                User $user
                            )
    {
        $this->middleware('auth');
        $this->user                              = $user;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $details['customer']   = $this->user->where('type','customer')->count();
        $details['technican']  = $this->user->where('type','technican')->count();
        $details['booking']    = 0;
        $details['revenue']    = 0;
        $applied                = 0;
        $c_year = date("Y"); 
        $c_m = date("m"); 
        for($i=1;$i<=(int)$c_m;$i++){
            $nmonth = date('M',strtotime("01-".$i."-".date("Y")));
             $leadadmissioncount =11;
            $admissiondata = array("label"=> $nmonth, "y"=> $leadadmissioncount);
            if($i==1){
                $md_array["revenue"][] =  $admissiondata;
            }else{
                array_push($md_array["revenue"], $admissiondata);
            } 
        }
        $details['mrevenue']    = $md_array;

        for($i=1;$i<=(int)$c_m;$i++){
            $nmonth = date('M',strtotime("01-".$i."-".date("Y")));
             $leadadmissioncount = 11;
            $admissiondata = array("label"=> $nmonth, "y"=> $leadadmissioncount);
            if($i==1){
                $md_array["booking"][] =  $admissiondata;
            }else{
                array_push($md_array["booking"], $admissiondata);
            } 
        }
        $details['mbooking']    = $md_array;


        return view('admin/dashboard/dashboard',$details);
    }
}
