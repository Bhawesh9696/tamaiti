<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookNew extends Model
{
    protected $table = 'books_new';
    
    protected $fillable = [
        's_no',
        'language',
        'taumata_marautanga',
        'taumata_panui',   
        'curriculum_level',
        'reading_level',
        'book_title',  
        'link',   
        'story_title_link',    
        'authors',
        'published_date',
        'publisher',  
        'isbn',    
        'page_number', 
        'pages',   
        'word_length',
        'series',  
        'resource_type',  
        'text_type',   
        'maori_topic_1_topic_2_topic_3',
        'english_topic_1_topic_2_topic_3', 
        'waka_canoe_1_waka_canoe_2',  
        'iwi_tribe_1_iwi_tribe_2',    
        'hapu_village_1_hapu_village_2',  
        'important_person_1_important_person_2',
        'learning_area_1_learning_area_2_learning_area_3',
        'wahanga_ako_1_wahanga_ako_2_wahanga_ako_3',
        'maori_story_summary', 
        'english_story_summary',   
        'maori_book_summary',  
        'english_book_summary',        
        'book_image_link' 
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
