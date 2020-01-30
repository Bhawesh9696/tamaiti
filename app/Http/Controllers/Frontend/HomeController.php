<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Book;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $displaybooks = array();
        
        if ($request->has('search'))
        {
            $displaybooks = DB::table('books_new');
            
            $displaybooks = $displaybooks->where(function($query) use ($request){
                $query->where('language', 'like', '%'.$request->input('search').'%')
                ->orWhere('taumata_marautanga', 'like', '%'.$request->input('search').'%')
                ->orWhere('taumata_panui', 'like', '%'.$request->input('search').'%')   
                ->orWhere('curriculum_level', 'like', '%'.$request->input('search').'%')
                ->orWhere('reading_level', 'like', '%'.$request->input('search').'%')
                ->orWhere('book_title', 'like', '%'.$request->input('search').'%')  
                ->orWhere('link', 'like', '%'.$request->input('search').'%')   
                ->orWhere('story_title_link', 'like', '%'.$request->input('search').'%')    
                ->orWhere('authors', 'like', '%'.$request->input('search').'%')
                ->orWhere('published_date', 'like', '%'.$request->input('search').'%')
                ->orWhere('publisher', 'like', '%'.$request->input('search').'%')  
                ->orWhere('isbn', 'like', '%'.$request->input('search').'%')    
                ->orWhere('page_number', 'like', '%'.$request->input('search').'%') 
                ->orWhere('pages', 'like', '%'.$request->input('search').'%')   
                ->orWhere('word_length', 'like', '%'.$request->input('search').'%')
                ->orWhere('series', 'like', '%'.$request->input('search').'%') 
                ->orWhere('resource_type', 'like', '%'.$request->input('search').'%')  
                ->orWhere('text_type', 'like', '%'.$request->input('search').'%')   
                ->orWhere('maori_topic_1_topic_2_topic_3', 'like', '%'.$request->input('search').'%')
                ->orWhere('english_topic_1_topic_2_topic_3', 'like', '%'.$request->input('search').'%') 
                ->orWhere('waka_canoe_1_waka_canoe_2', 'like', '%'.$request->input('search').'%')  
                ->orWhere('iwi_tribe_1_iwi_tribe_2', 'like', '%'.$request->input('search').'%')    
                ->orWhere('hapu_village_1_hapu_village_2', 'like', '%'.$request->input('search').'%')  
                ->orWhere('important_person_1_important_person_2', 'like', '%'.$request->input('search').'%')
                ->orWhere('learning_area_1_learning_area_2_learning_area_3', 'like', '%'.$request->input('search').'%')
                ->orWhere('wahanga_ako_1_wahanga_ako_2_wahanga_ako_3', 'like', '%'.$request->input('search').'%')
                ->orWhere('maori_story_summary', 'like', '%'.$request->input('search').'%') 
                ->orWhere('english_story_summary', 'like', '%'.$request->input('search').'%')   
                ->orWhere('maori_book_summary', 'like', '%'.$request->input('search').'%') 
                ->orWhere('english_book_summary', 'like', '%'.$request->input('search').'%')        
                ->orWhere('book_image_link', 'like', '%'.$request->input('search').'%'); 
            });
                
                if(($request->has('hidden_key') && $request->has('hidden_value')))
                {
                    $key = $request->input('hidden_key');
                    $value =  $request->input('hidden_value');
                    
                    $displaybooks->when(($key != '' && $value != '' && $key == 'Curriculum Level'), function ($q) use ($key, $value) {
                        return $q->where('curriculum_level', 'like', '%' . $value . '%');
                    });
                        
                    $displaybooks->when(($key != '' && $value != '' && $key == 'topic'), function ($q) use ($key, $value) {
                        return $q->where('book_title', 'like', '%' . $value . '%');
                    });
                            
                    $displaybooks->when(($key != '' && $value != '' && $key == 'Resource type'), function ($q) use ($key, $value) {
                        return $q->where('resource_type', 'like', '%' . $value . '%');
                    });
                                
                    $displaybooks->when(($key != '' && $value != '' && $key == 'Text Type'), function ($q) use ($key, $value) {
                        return $q->where('text_type', 'like', '%' . $value . '%');
                    });
                                    
                    $displaybooks->when(($key != '' && $value != '' && $key == 'Reading Level'), function ($q) use ($key, $value) {
                        return $q->where('reading_level', 'like', '%' . $value . '%');
                    });
                                        
                    $displaybooks = $displaybooks->when(($key != '' && $value != '' && $key == 'author'), function ($q) use ($key, $value) {
                        return $q->where('authors', 'like', '%' . $value . '%');
                    });
                                            
                    $displaybooks->when(($key != '' && $value != '' && $key == 'title'), function ($q) use ($key, $value) {
                        return $q->where('story_title_link', 'like', '%' . $value . '%');
                    });
                                                
//                     $displaybooks->when(($key != '' && $value != '' && $key == 'waka_canoe'), function ($q) use ($key, $value) {
//                         return $q->where('waka_canoe', 'like', '%' . $value . '%');
//                     });
                                                    
//                     $displaybooks->when(($key != '' && $value != '' && $key == 'iwi_tribe'), function ($q) use ($key, $value) {
//                         return $q->where('iwi_tribe', 'like', '%' . $value . '%');
//                     });
                                                        
                                                        
//                     $displaybooks->when(($key != '' && $value != '' && $key == 'hap_village'), function ($q) use ($key, $value) {
//                         return $q->where('hap_village', 'like', '%' . $value . '%');
//                     });
                                                            
                                                            
                    $displaybooks->when(($key != '' && $value != '' && $key == 'author'), function ($q) use ($key, $value) {
                        return $q->where('authors', 'like', '%' . $value . '%');
                    });
                                                                
                    /*                                            
                    $displaybooks->when(($key != '' && $value != '' && $key == 'Learning Area'), function ($q) use ($key, $value) {
                        return $q->where('reader_type', 'like', '%' . $value . '%');
                    });
                    */
                }
                
                $displaybooks = $displaybooks->orderBy('created_at', 'desc')->get();
        }
        
        
        
        if ($request->ajax())
        {
            $view = view('frontend.page.result')->with([
                'displayBooks'=>$displaybooks
            ])->render();
            
            return response()->json(['html'=>$view]);
        }
        
        return view('frontend.page.home')->with([
            'displayBooks'=>$displaybooks
        ]);
        
        
    }
    
    /*
    public function index_1(Request $request)
    {  
        
        $displaybooks = array();
        
        if ($request->has('search'))
        {
            $displaybooks = DB::table('books');
            
            $displaybooks = $displaybooks->where(function($query) use ($request){
                $query->where('book_title', 'like', '%'.$request->input('search').'%')
                    ->orWhere('story_title_link', 'like', '%'.$request->input('search').'%')
                    ->orWhere('authors', 'like', '%'.$request->input('search').'%')
                    ->orWhere('series', 'like', '%'.$request->input('search').'%')
                    ->orWhere('reader_type', 'like', '%'.$request->input('search').'%')
                    ->orWhere('category_topic', 'like', '%'.$request->input('search').'%')
                    ->orWhere('resource_type', 'like', '%'.$request->input('search').'%')
                    ->orWhere('text_type', 'like', '%'.$request->input('search').'%')
                    //->orWhere('waka_canoe', 'like', '%'.$request->input('search').'%')
                    ->orWhere('iwi_tribe', 'like', '%'.$request->input('search').'%')
                    ->orWhere('hap_village', 'like', '%'.$request->input('search').'%')
                    ->orWhere('publisher', 'like', '%'.$request->input('search').'%')
                    ->orWhere('isbn', $request->input('search'))
                    ->orWhere('story_summary', $request->input('search'))
                    ->orWhere('journal_summary', 'like', '%'.$request->input('search').'%');
            });
            
            if(($request->has('hidden_key') && $request->has('hidden_value')))
            {
                $key = $request->input('hidden_key');
                $value =  $request->input('hidden_value');
                
                $displaybooks->when(($key != '' && $value != '' && $key == 'Curriculum Level'), function ($q) use ($key, $value) {
                    return $q->where('level', 'like', '%' . $value . '%');
                });
                    
                $displaybooks->when(($key != '' && $value != '' && $key == 'topic'), function ($q) use ($key, $value) {
                    return $q->where('book_title', 'like', '%' . $value . '%');
                });
                        
                $displaybooks->when(($key != '' && $value != '' && $key == 'Resource type'), function ($q) use ($key, $value) {
                    return $q->where('resource_type', 'like', '%' . $value . '%');
                });
                            
                $displaybooks->when(($key != '' && $value != '' && $key == 'Text Type'), function ($q) use ($key, $value) {
                    return $q->where('text_type', 'like', '%' . $value . '%');
                });
                                
                $displaybooks->when(($key != '' && $value != '' && $key == 'Reading Level'), function ($q) use ($key, $value) {
                    return $q->where('resource_type', 'like', '%' . $value . '%');
                });
                                    
                $displaybooks = $displaybooks->when(($key != '' && $value != '' && $key == 'author'), function ($q) use ($key, $value) {
                    return $q->where('authors', 'like', '%' . $value . '%');
                });
                                        
                $displaybooks->when(($key != '' && $value != '' && $key == 'title'), function ($q) use ($key, $value) {
                    return $q->where('story_title_link', 'like', '%' . $value . '%');
                });
                                            
//                 $displaybooks->when(($key != '' && $value != '' && $key == 'waka_canoe'), function ($q) use ($key, $value) {
//                     return $q->where('waka_canoe', 'like', '%' . $value . '%');
//                 });
                                                
                $displaybooks->when(($key != '' && $value != '' && $key == 'iwi_tribe'), function ($q) use ($key, $value) {
                    return $q->where('iwi_tribe', 'like', '%' . $value . '%');
                });
                                                    
                                                    
                $displaybooks->when(($key != '' && $value != '' && $key == 'hap_village'), function ($q) use ($key, $value) {
                    return $q->where('hap_village', 'like', '%' . $value . '%');
                });
                                                        
                                                        
                $displaybooks->when(($key != '' && $value != '' && $key == 'author'), function ($q) use ($key, $value) {
                    return $q->where('authors', 'like', '%' . $value . '%');
                });
                                                            
                                                            
                $displaybooks->when(($key != '' && $value != '' && $key == 'Learning Area'), function ($q) use ($key, $value) {
                    return $q->where('reader_type', 'like', '%' . $value . '%');
                });
            }
            
            $displaybooks = $displaybooks->orderBy('created_at', 'desc')->get(); 
        }
        
        
        
        if ($request->ajax()) 
        {
            $view = view('frontend.page.result')->with([
                'displayBooks'=>$displaybooks
            ])->render();
            
            return response()->json(['html'=>$view]); 
        }
        
        return view('frontend.page.home')->with([
            'displayBooks'=>$displaybooks           
        ]);
    }
    */
     
}
