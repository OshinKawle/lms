<?php

namespace App\Http\Controllers\Admin\Master;

# Models
use App\Models\Univercity;
use App\Models\Course;

# Other Classes
use DB;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    
    #Bind View 
    protected $view = 'admin.master.course.';

    #Bind Course model
    protected $course;

    #Bind Univercity model
    protected $univercity;

    /**
      * Defining the default constructor for controller
      *
      */

    public function __construct(
                        Univercity $univercity,  
                        Course $course  
                            )
                        
    {
        $this->course      = $course;
        $this->univercity  = $univercity;
        
    }
     // @return \Illuminate\Http\Response
     
    public function index()
    {
        try
        {

            $relation  = ['univercity'];
             $details['lists'] = $this->course->with($relation)->orderBy('id', 'DESC')->paginate(50);

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
            $details['univercity'] = $this->univercity->where('status',1)->get();
            #render view
            return view($this->view.'create',$details);
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
                    'univercity_id' => 'required',
                   
            ]);

            if($validate->fails()){

                 toastr()->error($validate->messages());
                return redirect()->back()->withInput();
            }
    
            $Course = new Course();
            $Course->name= $request->name;
            $Course->univercity_id= $request->univercity_id;
            $Course->save();
             toastr()->success('Added Successfully');
            return redirect('/master/course');
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
        //
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
             $details['detail'] = $this->course->whereId($id)->first();

            

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
    
            $course =  course::find($id);
            $course->name= $request->name;
            $course->save();
             toastr()->success('Added Successfully');
            return redirect('/master/course');
        }catch(\Exception $ex)
        {
            toastr()->success($ex->getMessage());
            return back()->with('error', $ex->getMessage());
        } 
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
