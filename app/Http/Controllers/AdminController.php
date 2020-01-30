<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\validatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Model\Admin;
use App\Model\Service;
use App\Model\Issues;
use App\Model\Solutions;
use App\Model\Popular;
use Auth;
use App\User;
use App\BookNew;
//use DB;
use Session;
class AdminController extends Controller
{
    public function sign_up(){
    	return view('admin.sign_up');
    }
    public function login(){
        return view ('admin.login');
    } 
	public function dashboard(Request $request){


       return view('admin.dashboard');

    	
    }
    public function adminLogin(Request $request)
      {   

          $credentials = array('email' => $request->input('email'), 'password' => $request->input('password'), 'user_type' => 'superadmin');
        
          if (Auth::attempt($credentials)) {
             
              return view('admin.dashboard');
          }
          else
            { 
                 $request->session()->flash('success','Wrong Username or Password');
                 return back();
            }

        
      }
	public function Dashboardsss()
	{
	   return view('backend.Dashboard', $data);
	}	
	   
/*
|--------------------------------------------------------------------------
| Start Most Popular Number  Management System 
|--------------------------------------------------------------------------
*/ 	 
    public function addPopularNumber(){	
	
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
            #$data['getPopularNumber']=DB::table('students')->orderby('id','desc')->get();
             $data['getPopularNumber']=DB::table('books_new')->orderby('id','asc')->get();
    	   return view('admin.popular_number_list',$data);
         }  
        return redirect('/');
    }


    public function userList(){
     if(Auth::check())
         { 
            #$data['getPopularNumber']=DB::table('students')->orderby('id','desc')->get();
             $data['getPopularNumber']=DB::table('users')->orderby('id','desc')->get();
         return view('admin.user_list',$data);
         }  
        return redirect('/');
    }


	public function popularNumberUpdate(Request $request ,$id){
        $data['popularNumberData']=DB::table('students')->where('id','=',$id)->get();
    	   return view('admin.update_popular_number',$data);
    }
	
	public function popularNumberEdit(Request $request ,$id)
    { 	
    $request = DB::table('books_new')->where('id',$id)->get();

    if($request->isEmpty())
    {
      $message = array('flag'=>'alert-danger', 'message'=>'No Data found with provided id');
      return back()->with(['message'=>$message]);
    }

    return view('admin.edit_popular_number_list')->with(['request'=>$request->first(), 'title'=>'Edit Catalogue', 'action'=>route('catalogueUpdate', $id)]);

    }


    public function catalogueUpdate(Request $request, $id)
    {        
      try 
      {           
        $data = [
          'language' =>$request->input('language'),
          'taumata_marautanga' =>$request->input('taumata_marautanga'),
          'taumata_panui' =>$request->input('taumata_panui'), 
          'curriculum_level' =>$request->input('curriculum_level'),
          'reading_level' =>$request->input('reading_level'),
          'book_title' =>$request->input('book_title'),
          'link' =>$request->input('link'),
          'story_title_link' =>$request->input('story_title_link'),
          'authors' =>$request->input('authors'),
          'published_date' =>$request->input('published_date'),
          'publisher' =>$request->input('publisher'),
          'isbn' =>$request->input('isbn'),
          'page_number' =>$request->input('page_number'),
          'pages' =>$request->input('pages'),
          'word_length' =>$request->input('word_length'),
          'series' =>$request->input('series'),
          'resource_type' =>$request->input('resource_type'),
          'text_type' =>$request->input('text_type'),
          'maori_topic_1_topic_2_topic_3' =>$request->input('maori_topic_1_topic_2_topic_3'),
          'english_topic_1_topic_2_topic_3' =>$request->input('english_topic_1_topic_2_topic_3'),
          'waka_canoe_1_waka_canoe_2' =>$request->input('waka_canoe_1_waka_canoe_2'),
          'iwi_tribe_1_iwi_tribe_2' =>$request->input('iwi_tribe_1_iwi_tribe_2'),
          'hapu_village_1_hapu_village_2' =>$request->input('hapu_village_1_hapu_village_2'),
          'important_person_1_important_person_2' =>$request->input('important_person_1_important_person_2'),
          'learning_area_1_learning_area_2_learning_area_3' =>$request->input('learning_area_1_learning_area_2_learning_area_3'),
          'wahanga_ako_1_wahanga_ako_2_wahanga_ako_3' =>$request->input('wahanga_ako_1_wahanga_ako_2_wahanga_ako_3'),
          'maori_story_summary' =>$request->input('maori_story_summary'),
          'english_story_summary' =>$request->input('english_story_summary'),
          'maori_book_summary' =>$request->input('maori_book_summary'),
          'english_book_summary' =>$request->input('english_book_summary'),
          'book_image_link' =>$request->input('book_image_link')               
        ];

        //dd($data);
           
        $rs = BookNew::where(['id'=> $id])->update($data);
           
        if($rs){
          $message = array('flag'=>'alert-success', 'message'=>'Catalogue Updated Successfully');
          return redirect()->route('popular_number_list')->with(['message'=>$message]);
        }
        else{
           
          $message = array('flag'=>'alert-danger', 'message'=>'Unable to update new Catalogue, Please try again');
          return redirect()->route('popular_number_list')->with(['message'=>$message]); 
        }
       } 
       catch (Exception $e) 
       {
           $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
           return back()->with(['message'=>$message]);
       }
    }



	Public function popularNumberDelete(Request $request ,$id)
	   {  
		DB::table('books_new')->where('id','=',$id)->delete();
		  $request->session()->flash('success','Data has been deleted successfully!!');
		  return redirect()->route('popular_number_list');   
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
       }   
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

        $data = $request->all();
 
    $user = User::find(auth()->user()->id);
    if(!Hash::check($data['cpassword'], $user->password)){
         $request->session()->flash('success','Please Enter Correct Current Password');
         return back();
    }else{
      DB::table('users')->where('id',1)
            ->update(['password' => Hash::make($data['password'])]);
             $request->session()->flash('success','Password Changed SuccessFully');
       return redirect()->route('change_passsword');  
    }

   
       }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
/*
|--------------------------------------------------------------------------
|End Change Password Management System
|--------------------------------------------------------------------------
*/	
}
