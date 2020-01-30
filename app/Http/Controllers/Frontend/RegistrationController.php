<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class RegistrationController extends Controller
{

    public function store(Request $request)
    {           
//         $request->validate([
//             '_name'=>'required',
//             '_organisation'=>'required',
//             '_organisation_type'=>'required',
//             '_email'=>'required|unique:users',
//             '_password'=>'required',
//         ]);
        
        
        try 
        {
            $otp = rand(1000, 9999);
            $token = md5($otp.'/'.time()); 
            
            $rs = User::create([
                'name' => $request->input('_name'),
                'organization_name' => $request->input('_organisation'),
                'organization_type' => $request->input('_organisation_type'),
                'email' => $request->input('_email'),
                'password' => Hash::make($request->input('_password')),
                'user_type' => 'user',
                'otp' => $otp,
                'request_token' => $token
            ]);
            
            if($rs)
            {
                $data = array(
                    'name' => $request->input('_name'),
                    'password' => $request->input('_password'),
                    'otp' => $otp,
                    'email' => $request->input('_email')
                );
                
                Mail::send('mail.registration_otp', $data, function ($message) use ($data) {
                    $message->to($data['email'])->subject('Registration OTP');
                    $message->from('info@tamaiti.com', 'Tamaiti');
                });
                
                $request->session()->flash('success', 'Please check your email box for verification code');
                return redirect()->route('site.verify.token', [$token]);
            }
            
        }
        catch (Exception $e) 
        {
            \Log::error('Exception ', [$e->getMessage()]);
            $request->session()->flash('error', 'Something went wrong, please try again later');
            return back();
        }        
    }
    
    
    public function verify_token(Request $request, $token)
    {
        return view('frontend.page.auth.validate_otp')->with(['token' => $token]);
    }
    
    public function confirm_registration(Request $request, $token)
    {        
        try 
        {
            $otp = $request->input('t1').$request->input('t2').$request->input('t3').$request->input('t4');
            $userData = User::where(['request_token'=>$token, 'otp'=>$otp])->get();
            
            if($userData->isEmpty()) { 
                $request->session()->flash('error', 'Invalid OTP or token sent in request');
                return back(); 
            }
            
            User::where(['request_token'=>$token, 'otp'=>$otp])->update(['status'=>1]);
            $request->session()->flash('success', 'Registration Successfull, please login with your email and password');
            return redirect()->route('login');
        } 
        catch (Exception $e) 
        {
            \Log::error('Exception ', [$e->getMessage()]);
            $request->session()->flash('error', 'Something went wrong, please try again later');
            return back();
        }
    }
    
    
    
    public function login(Request $request)
    {
        if (Auth::attempt(array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'verified' => 1
        ))) {
            session([
                'email' => $request->get('email')
            ]);

            Session::flash('message', "You are logged in.");

            return redirect('/');
        } 
        else {
            Session::flash('message', "Invalid Credentials , Please try again.");

            return Redirect::back();
        }
    }
    
    /*
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect::to('/');
    }
    */
    
    /*
    public $email;

    public function verifyOtp(Request $request)
    {
        $response = $request->all();

        $email_id = $response['email'];
        $enteredOtp = $request->input('otp');

        $OTP = $request->session()->get('otp');

        $datas = DB::table('users')->where('email', '=', $email_id)->get();
        foreach ($datas as $row) {
            $row->otp;
        }
        $OTP = $row->otp;

        if ($OTP === $enteredOtp) {
            $request->session()->flash('success', '<span style="color:red;">Your Email is Verified. You can login now!!</span>');

            User::where('email', '=', $email_id)->update([
                'verified' => 1
            ]);

            Session::forget('OTP');
            return redirect('/');
        } else {
            $request->session()->flash('success', '<span style="color:red;">OTP does not match</span>');
            return '<span style="color:red;">OTP does not match!! Please Go back and enter the correct OTP</span>';
        }
    }

    public function forgotSuccess()
    {
        return view('front.forgetsuccess');
    }

    public function forgotPassword(Request $request)
    {
        $user = $request->email;
        $data = DB::table('users')->select('password')
            ->where('email', $user)
            ->get();
        if ($data != null) {
            foreach ($data as $row) {
                $pass = $row->password;
            }

            $to = $user;
            $subject = "Howdofix | New Password";

            $message = "Your new password is: " . $pass . '<br><br>Thanks Regards<br>Howdofix Team';

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            // $headers .= 'From: . $user' . "\r\n";
            $headers .= 'From: <info@howdofix.com>' . "\r\n";
            // $headers .= 'Cc: myboss@example.com' . "\r\n";

            if (mail($to, $subject, $message, $headers)) {
                $request->session()->flash('success', '<span style="color:green;">Your password been sent, Please check the mail!!</span>');
                return redirect('forgotSuccess');
            } else {

                $request->session()->flash('success', '<span style="color:red;">opss..., something went wrong,please try again!!</span>');
                return redirect('forgotSuccess');
			}
	    }
		else{
				
				$request->session()->flash('success','<span style="color:red;">Error..., Seems like this email id is not exist in our database!!</span>');
				return redirect('forgotSuccess');
			}		 
     }

    */



}
