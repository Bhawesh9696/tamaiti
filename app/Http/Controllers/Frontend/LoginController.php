<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.page.auth.login');
    }
    
    public function login_attempt(Request $request)
    {
        try 
        {
            $credentials = array('email' => $request->input('_email'), 'password' => $request->input('_password'));
            $rememberToken = $request->input('remember_token') ? true : false;
            if (Auth::attempt($credentials, $rememberToken)) {
                $request->session()->flash('success', 'Login Successfull !!!');
                return redirect()->route('site.home');
            }
            
            $request->session()->flash('error', 'Invalid Credentials !!!');
            return back();
        } 
        catch (Exception $e) 
        {
            \Log::error('Exception ', [$e->getMessage()]);
            $request->session()->flash('error', 'Something went wrong, please try again later');
            return back();
        }
    }
    
    public function logout(Request $request)
    {
        \Session::flush();
        Auth::logout();
        
        $request->session()->flash('success', 'Logged out successfully !!!');
        return redirect()->route('site.home');
    }
}
