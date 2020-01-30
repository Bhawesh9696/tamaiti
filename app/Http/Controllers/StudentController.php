<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;

// PHPExcel_Settings::setZipClass(PHPExcel_Settings::PCLZIP);
class StudentController extends Controller
{

    public function index()
    {
        return view('add-student');
    }

    public function import(Request $request)
    {
        $extension = File::extension($request->file->getClientOriginalName());
        
        // validate the xls file
        $this->validate($request, array(
            'file' => 'required'
        ));

        if ($request->hasFile('file')) {
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function ($reader) {})->get();
                $input = $data->all();
                
                $rs = false;
                if (! empty($input)) 
                {
                    foreach ($input as $key => $value) 
                    {  
                        if($value['s_no'] != ''){
                                                
                            $books = [
                                's_no' =>$value->s_no,
                                'language' =>$value->language,
                                'taumata_marautanga' =>$value->taumata_marautanga,
                                'taumata_panui' =>$value->taumata_panui, 
                                'curriculum_level' =>$value->curriculum_level,
                                'reading_level' =>$value->reading_level,
                                'book_title' =>$value->book_title,
                                'link' =>$value->link,
                                'story_title_link' =>$value->story_title_link,
                                'authors' =>$value->authors,
                                'published_date' =>$value->published_date,
                                'publisher' =>$value->publisher,
                                'isbn' =>$value->isbn,
                                'page_number' =>$value->page_number,
                                'pages' =>$value->pages,
                                'word_length' =>$value->word_length,
                                'series' =>$value->series,
                                'resource_type' =>$value->resource_type,
                                'text_type' =>$value->text_type,
                                'maori_topic_1_topic_2_topic_3' =>$value->maori_topic_1_topic_2_topic_3,
                                'english_topic_1_topic_2_topic_3' =>$value->english_topic_1_topic_2_topic_3,
                                'waka_canoe_1_waka_canoe_2' =>$value->waka_canoe_1_waka_canoe_2,
                                'iwi_tribe_1_iwi_tribe_2' =>$value->iwi_tribe_1_iwi_tribe_2,
                                'hapu_village_1_hapu_village_2' =>$value->hapu_village_1_hapu_village_2,
                                'important_person_1_important_person_2' =>$value->important_person_1_important_person_2,
                                'learning_area_1_learning_area_2_learning_area_3' =>$value->learning_area_1_learning_area_2_learning_area_3,
                                'wahanga_ako_1_wahanga_ako_2_wahanga_ako_3' =>$value->wahanga_ako_1_wahanga_ako_2_wahanga_ako_3,
                                'maori_story_summary' =>$value->maori_story_summary,
                                'english_story_summary' =>$value->english_story_summary,
                                'maori_book_summary' =>$value->maori_book_summary,
                                'english_book_summary' =>$value->english_book_summary,
                                'book_image_link' =>$value->book_image_link
                            ];

                            $rs = DB::table('books_new')->insert($books);
                        };
                    } 
                    
                    if($rs) {Session::flash('success', 'Your Data has successfully imported'); return redirect('admin/popular-number-list'); }
                    else { Session::flash('error', 'Error inserting the data..'); return back(); }
                    
                }

                
            } else {
                // return back();
                $request->session()->flash('success', 'File is a ' . $extension . ' file.!! Please upload a valid xls/csv/xlsx file..!!');
                //Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }

}