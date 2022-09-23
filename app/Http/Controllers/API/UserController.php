<?php


namespace App\Http\Controllers\API;

#Model
use App\Models\User;
use App\Models\Booking;
use App\Models\Review;
use App\Models\BookingReject;
use App\Models\TechnicanReview;
use App\Models\PartnerRegistrtaion;
use App\Models\PartnerRegistrtaionVerifcation;

#Other Class
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use App\Http\Controllers\API\BaseController as BaseController;


class UserController extends BaseController
{



    #Bind User model
    protected $user;

    #Bind Review model
    protected $review;

    #Bind Booking model
    protected $booking;

    #Bind BookingReject model
    protected $bookingReject;

    #Bind TechnicanReview model
    protected $technicanReview;

    #Bind PartnerRegistrtaion model
    protected $partnerRegistrtaion;

    #Bind PartnerRegistrtaionVerifcation model
    protected $partnerRegistrtaionVerifcation;

    /**
      * Defining the default constructor for controller
      *
      */
    public function __construct(
                                PartnerRegistrtaionVerifcation $partnerRegistrtaionVerifcation,
                                PartnerRegistrtaion $partnerRegistrtaion,
                                TechnicanReview $technicanReview,
                                BookingReject $bookingReject,
                                Booking $booking,
                                Review $review,
                                User $user
                            )
    {
         
        $this->user                   = $user;
        $this->review                 = $review;
        $this->booking                = $booking;
        $this->bookingReject          = $bookingReject;
        $this->technicanReview        = $technicanReview;
        $this->partnerRegistrtaion    = $partnerRegistrtaion;
        $this->partnerRegistrtaionVerifcation        = $partnerRegistrtaionVerifcation;
    }
 
   
   
    /**
     * . api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        $user      = Auth::user();
        $bookingid = $this->booking->where('customer_id',$user->id)->pluck('id')->all();
        $rate      = $this->technicanReview->whereIn('booking_id',$bookingid)->sum('rate');
        $ratecount = $this->technicanReview->whereIn('booking_id',$bookingid)->count();
        $details['list'] =$user;
        $ratringaverga = ($rate/100)*$ratecount;
        $details['rate'] = round($ratringaverga,1);

        return $this->sendResponse($details, 'User Detail.');
    }
    /**
     * . api
     *
     * @return \Illuminate\Http\Response
     */
    public function Technicandetails()
    {
        
        $user = Auth::user();
        $bookingid = $this->booking->where('assign_to_technican_id',$user->id)->pluck('id')->all();
        $rate = $this->review->whereIn('booking_id',$bookingid)->sum('rate');
        $rejectss = $this->bookingReject->where('technican_id',$user->id)->first();
        $success['rate'] =  $rate;
        $success['partnerid'] =  $user->id;
        $success['jobdone']   =  $this->booking->where('assign_to_technican_id',$user->id)->where('booking_status_id',5)->count('id');
        $success['jobdoneamount']   =  $this->booking->where('assign_to_technican_id',$user->id)->where('booking_status_id',5)->sum('amount');
        $success['jobreject']   =  isset($rejectss) ? $rejectss->job : 0;
        $success['jobrejectamount']   = isset($rejectss) ?  floatval($rejectss->amount) : 0;
        $success['totalearn'] =  $this->booking->where('assign_to_technican_id',$user->id)->where('booking_status_id',array(5,3))->sum('amount');
        $success['user'] =  $user;

        return $this->sendResponse($success, 'User Detail.');
    }
       /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'mobile_number' => 'required'
        ]);

        if($validator->fails()){
          return $this->sendError('Validation Error.', $validator->errors());
        }
        $mobile = $request->mobile_number;
        $check = $this->user->where('mobile_number',$mobile)->first();
        if($check){
            if(Auth::attempt(['mobile_number' => request('mobile_number'), 'password' => 123456])){
                $user = Auth::user();
                 $data = ['device_key'=>request('device_key'),];
                $this->user->whereId($user->id)->update($data);
                $success['user_id'] =  $user->id;
                $success['type'] =  'customer';
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                return $this->sendResponse($success, 'Login successfully.');
               
                    
            }
            else{
                 return $this->sendError('Please Enter Valid Email', '401'); 
            }
        }
        $input = $request->all();
        $input['password'] = Hash::make(123456);
        $input['type'] = 'customer';
        $user = User::create($input);
        $success['type'] =  'customer';
        $success['user_id'] =  $user->id;
        $success['token'] =  $user->createToken('MyApp')->accessToken;
       return $this->sendResponse($success, 'Login successfully.');
    }
    
       /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){

        if(is_numeric(request('mobile_email'))){
            if(Auth::attempt(['mobile_number' => request('mobile_email'), 'password' => request('password')])){
                $user = Auth::user();
                $role_id = $user->roles->first();
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                $success['name'] =  $user->name;
                $success['user_id'] =  $user->id;
                $success['type'] =  $user->type;
                  $data = ['device_key'=>request('device_key'),];
                $this->user->whereId($user->id)->update($data);
                return $this->sendResponse($success, 'Login successfully.');
               
                    
            }
            else{
                  $usersss = $this->user->where('email',request('mobile_email'))->first();
                if($usersss){
                 return $this->sendError('Please Enter Valid Password', '401'); 
                }else{
                    return $this->sendError('Please Enter Valid Email', '401');
                }
            }
        }else{
              if(Auth::attempt(['email' => request('mobile_email'), 'password' => request('password')])){
                $user = Auth::user();
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                $success['name'] =  $user->name;
                $success['user_id'] =  $user->id;
                $success['type'] =  $user->type;
                $data = ['device_key'=>request('device_key'),];
                $this->user->whereId($user->id)->update($data);
                return $this->sendResponse($success, 'Login successfully.');
                  
                      
              }
              else{

                $usersss = $this->user->where('email',request('mobile_email'))->first();
                if($usersss){
                 return $this->sendError('Please Enter Valid Password', '401'); 
                }else{
                    return $this->sendError('Please Enter Valid Email', '401');
                }
              }
        }
    }
     

        /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function technican(){

        if(is_numeric(request('mobile_email'))){
            if(Auth::attempt(['mobile_number' => request('mobile_email'), 'password' => 123456])){
                $user = Auth::user();
                $role_id = $user->roles->first();
               
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                $success['name'] =  $user->name;
                $success['user_id'] =  $user->id;
                $success['type'] =  $user->type;
                  $data = ['device_key'=>request('device_key'),];
                $this->user->whereId($user->id)->update($data);
                return $this->sendResponse($success, 'Login successfully.');
               
                    
            }
            else{
                  $usersss = $this->user->where('email',request('mobile_email'))->first();
                if($usersss){
                 return $this->sendError('You Have Not Register with us Please contact to admin', '401'); 
                }else{
                    return $this->sendError('Please Enter Valid Email', '401');
                }
            }
        }
    }

    function forgetPassword(Request $request){
      try{
        $validator = Validator::make($request->all(), [
                      'mobile_number' => 'required',
                      'otp'           => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

          $otp = $request->otp;
          $mobile = $request->mobile_number;
          $userss = User::where('mobile_number','=',$request->mobile_number)->first();

          if(isset($userss)){
            
            $user= otpSms($mobile,$otp);
             return $this->sendResponse($user, 'Successfully send otp.'); 
          }else{
              return $this->sendError('Mobile Number Already Exists', 404);
          }
           
      }catch(\Exception $ex)
        {
            return $this->sendError('Validation Error.', $ex->getMessage());
        }
      }
      public function newPassword(Request $request){
          try{

                $validator = Validator::make($request->all(), [
                      'mobile_number' => 'required',
                      'new_password' => 'required',
                      'c_password' => 'required|same:new_password',
                  ]);

                  if($validator->fails()){
                      return $this->sendError('Validation Error.', $validator->errors());       
                  }
                  $mobile = $request->mobile_number;
                  $users = User::where('mobile_number', $mobile)->first();

                  $user = User::find($users->id)->update(['password'=> Hash::make($request->new_password)]);
                   return $this->sendResponse( $user, 'Password Change Successfully.'); 

          } 
          catch(\Exception $ex)
          {
              return $this->sendError('Validation Error.', $ex->getMessage());
          }
    }
    public function profile(Request $request){
       try{

             $validator = Validator::make($request->all(), [
                  'image' => 'required',
                  'name'  => 'required',
              ]);

              if($validator->fails()){
                  return $this->sendError('Validation Error.', $validator->errors());       
              }
               #get the requested data in Data variable
                $data = [
                    'name'         => $request->name,
                    'image'        => 'public/'.fileUpload('user/profile/',$request['image']),
                   
                    ];
                     $usessr = Auth::user();
              $this->user->whereId($usessr->id)->update($data); 
               $usessrs = 'Profile Update Successfully.';
              
          return $this->sendResponse($usessrs, 'Profile Update Successfully.'); 

          } 
          catch(\Exception $ex)
          {
              return $this->sendError('Validation Error.', $ex->getMessage());
          }
    }
    public function Technicanprofile(Request $request){
       try{

             $validator = Validator::make($request->all(), [
                  'image' => 'required',
              ]);

              if($validator->fails()){
                  return $this->sendError('Validation Error.', $validator->errors());       
              }
               #get the requested data in Data variable
                $data = [
                    'image'        => 'public/'.fileUpload('technican/profile/',$request['image']),
                   
                    ];
                     $usessr = Auth::user();
              $this->user->whereId($usessr->id)->update($data); 
               $usessrs = 'Profile Update Successfully.';
              
          return $this->sendResponse($usessrs, 'Profile Update Successfully.'); 

          } 
          catch(\Exception $ex)
          {
              return $this->sendError('Validation Error.', $ex->getMessage());
          }
    }
     public function otp(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'otp'          => 'required',
            'mobile_number' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $otp = $request->otp;
        $mobile = $request->mobile_number;
        $check = $this->user->where('mobile_number',$mobile)->first();
        
        
        
        if($check){
           return $this->sendError('Mobile Number Already Exists', 'User Detail.');
        }else{
            otpSms($mobile,$otp);
        }
           
        
         
        $user = 'Successfully Send Otp';
        return $this->sendResponse($user, 'User Detail.');
    }
     public function customerotp(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'otp'          => 'required',
            'mobile_number' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $otp = $request->otp;
        $mobile = $request->mobile_number;
        $check = $this->user->where('mobile_number',$mobile)->first();
        
        
        
        if(isset($check->type)){
             if($check->type!='customer'){
               return $this->sendError('Mobile Number Not Exists', 'User Detail.');
            }
        }
        otpSms($mobile,$otp);
       
           
        
         
        $user = 'Successfully Send Otp';
        return $this->sendResponse($user, 'User Detail.');
    }

        public function Technicianotp(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'otp'          => 'required',
            'mobile_number' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $otp = $request->otp;
        $mobile = $request->mobile_number;
        $check = $this->user->where('mobile_number',$mobile)->first();
        
       

        if(isset($check->type)){
             $checkdd = $this->partnerRegistrtaion->where('user_id',$check->id)->first();
            $checknot = $this->partnerRegistrtaionVerifcation->where('p_r_id',$checkdd->id)->first();
            if(empty($checknot)){
                return $this->sendError('Wait Your Account is not verify yet', '401'); 
            }
            if($check->type=='technican'){
                otpSms($mobile,$otp);
                $user = 'Successfully Send Otp';
                return $this->sendResponse($user, 'User Detail.');
            }
        }
        return $this->sendError('Mobile Number Not Exists', 'User Detail.');
    }
}