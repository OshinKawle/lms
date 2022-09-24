<?php

namespace App\Http\Controllers\Admin\Master;

# Models
use App\Models\Univercity;

# Other Classes
use DB;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UnivercityController extends Controller
{
      # Define Base view
    protected $view = 'admin.master.university.';

    #Bind Univercity model
    protected $univercity;

    /**
      * Defining the default constructor for controller
      *
      */

    public function __construct(
                        Univercity $univercity  
                            )
                        
    {
        $this->univercity  = $univercity;
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)   
    {
        try
        {
             $details['lists'] = $this->univercity->orderBy('id', 'DESC')->paginate(50);
            #render view
            return view($this->view.'index',$details);
        }catch(\Exception $ex)
        {
            toastr()->success($ex->getMessage());
            return back()->with('error', $ex->getMessage());
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try
        {   
            #render view
            return view($this->view.'create');
        }catch(\Exception $ex)
        {
            toastr()->success($ex->getMessage());

            return back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            

            $validate = Validator::make($request->all(), [
                    'name' => 'required',
                   
            ]);

            if($validate->fails()){

                 toastr()->error($validate->messages());
                return redirect()->back()->withInput();
            }
    
            $Univercity = new Univercity();
            $Univercity->name= $request->name;
            $Univercity->save();
             toastr()->success('Added Successfully');
            return redirect('/master/university');
        }catch(\Exception $ex)
        {
            toastr()->success($ex->getMessage());
            return back()->with('error', $ex->getMessage());
        }
           
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $user = Univercity::find($id);
       // return view('edit',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try
        {
             $details['detail'] = $this->univercity->whereId($id)->first();

            #render view
            return view($this->view.'edit',$details);
        }catch(\Exception $ex)
        {
            toastr()->success($ex->getMessage());
            return back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{

            $validate = Validator::make($request->all(), [
                'name' => 'required',
            ]);

            if($validate->fails()){
                 toastr()->error($validate->messages());
                return redirect()->back()->withInput();
            }
    
            $univercity =  Univercity::find($id);
            $univercity->name= $request->name;
            $univercity->save();
             toastr()->success('Added Successfully');
            return redirect('/master/university');
        }catch(\Exception $ex)
        {
            toastr()->success($ex->getMessage());
            return back()->with('error', $ex->getMessage());
        }    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $caste = $this->Univercity::find($id);
        $caste ->delete();
         toastr()->success('You are successfully Deleted');
       return redirect('/master/university');
    }
    }


