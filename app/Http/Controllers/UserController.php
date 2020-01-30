<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\validatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Model\Admin;
use App\Model\Service;
use App\Model\Issues;
use App\Model\Solutions;
use App\Model\Popular;
use Auth;
use App\User;
use App\UserRegistration;
//use DB;
use Session;
class UserController extends Controller
{
    public function sign(){
    	return view('user.sign');
    }
    public function forget(){
    return view('user.forget');
    } 
	public function home(Request $request){
		
		$data=session('success');
           if($data==null){
			 $request->session()->flash('success','Login Please');
            return redirect('/sign');
		  }else{
			  $request->session()->flash('success',' ');
			  return view('user.home-page');
		  }
			
   
    }
	public function verification(){
    return view('user.verification');
    }
	
	  public function saveUserRegistration(Request $request){
      
       //print_r($request->all());
	    $input=$request->all(); 
	    //$input['slug'] = str_slug($request->input('title'), '-');
		DB::table('user_registrations')->insert($input);
		 
		 $data =DB::table('user_registrations')->where('email','=',$request->email)->where('password','=',$request->password)->first();
    	  //dd($data);
		  if($data==null){
			     $request->session()->flash('success','Wrong Username or Password');
                 return redirect('/sign');
		  }else{
			  $request->session()->flash('success','You have successfully login !!');
			  return redirect('/home');
		  }
    }
	
    public function UserLogin(Request $request)
     {   
        
		 $data =DB::table('user_registrations')->where('email','=',$request->email)->where('password','=',$request->password)->first();
    	  //dd($data);
		  if($data==null){
			     $request->session()->flash('success','Wrong Username or Password');
                 return redirect('/sign');
		  }else{
			  $request->session()->flash('success','You have successfully login !!');
			  return redirect('/home');
		  }
    }
	
/* 	    public function userLogin(Request $request)
     {   
        {
            if($the_user=User::select()->where('user_type','=','superadmin')->where('email','=',$request->email)->where('password','=',sha1($request->password))->first())

                   {
                    Auth::login($the_user);
                    return redirect('/user-dashboard');                       
                    }
            else
            { 
                 $request->session()->flash('success','Wrong Username or Password');
                 return redirect('/user');
            }
         }
    } */
	public function Dashboardsss()
	{
	   return view('backend.Dashboard', $data);
	}	
	   
/*
|--------------------------------------------------------------------------
| Start Most Popular Number  Management System 
|--------------------------------------------------------------------------
*/ 	 
/*     public function addPopularNumber(){	
	
    	return view('admin.add_popular_number');
    }
	public function savePopularNumber(Request $request){
      
     //print_r($request->all());
	  $input=$request->all(); 
	    //$input['slug'] = str_slug($request->input('title'), '-');
		DB::table('students')->insert($input);
		$request->session()->flash('success','Succesfully Added Services!!');
		return redirect('popular-number-list');
    }	
	public function popularNumberList(){
	   if(Auth::check())
         { 
        $data['getPopularNumber']=DB::table('students')->orderby('id','desc')->get();
    	   return view('admin.popular_number_list',$data);
         }  
        return redirect('/');
    }
	public function popularNumberUpdate(Request $request ,$id){
        $data['popularNumberData']=DB::table('students')->where('id','=',$id)->get();
    	   return view('admin.update_popular_number',$data);
    }
	
	public function popularNumberEdit(Request $request ,$id)
        { 	
        $input=$request->all(); 		
           DB::table('students')->where('id',$id)->update($input); 
           $request->session()->flash('success','Data Updated Successfully!!');     
           return redirect('popular-number-list');  
        }
	Public function popularNumberDelete(Request $request ,$id)
	   {  
		DB::table('students')->where('id','=',$id)->delete();
		  $request->session()->flash('success','Data has been deleted successfully!!');
		  return redirect('popular-number-list');   
       }
	public function popularNumberStatus(Request $request ,$id)
       {
        $data=DB::table('students')->where('id', $id)->pluck('status');  
          $status = $data[0] ; 
          if(($status==1)){
              $status=0;
          }else
          $status=1; 	   
          DB::table('populars')->where('id',$id)->update(['status' => $status]); 
          $request->session()->flash('success','Status change Successfully!!');     
          return redirect('popular-number-list');  
       }    */
/*
|--------------------------------------------------------------------------
|End Most Popular Number Management System
|--------------------------------------------------------------------------
*/	   
	   
	
/*
|--------------------------------------------------------------------------
|Start Change Password Management System
|--------------------------------------------------------------------------
*/	 
	public function changePassword(){		
       return view('admin.change_password');
    }	
	public function changePasswordSuccessfully(Request $request)
       {  
        if(Auth::check())
         {
           
        //$database=Auth::Admin()->password;
        $database=User::find(1)->password;
		//dd($database);
        $oldPassword=sha1($request->cpassword);
		$newPassword=sha1($request->password);
        //$oldPassword=Hash::make($request->get ( 'password' ));
        //$newPassword=Hash::make($request->get ( 'password' ));
       
        if($database==$oldPassword)
        {
          DB::table('users')->where('id',1)
            ->update(['password' => $newPassword]);
             $request->session()->flash('success','Password Changed SuccessFully');
			 return redirect('changePassword'); 
        }
        $request->session()->flash('success','Please Enter Correct Current Password');
             return redirect('changePassword');  
       }  
        return redirect('masterAdmin');
       }
/*
|--------------------------------------------------------------------------
|End Change Password Management System
|--------------------------------------------------------------------------
*/	
}
