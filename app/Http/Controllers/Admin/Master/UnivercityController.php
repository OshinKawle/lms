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

    /**
      * Defining the default constructor for controller
      *
      */

    public function __construct(
                            )
    {
        
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
            
            #render view
            return view($this->view.'index');
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
           
        return redirect('home');
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
            #render view
            return view($this->view.'edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
