<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level',
        'book_title',
        'story_title_link',
        'authors',
        'series',
        'reader_type',
        'category_topic',
        'resource_type',
        'text_type',
        'waka_canoe',
        'iwi_tribe',
        'hap_village',
        'published_date',
        'publisher',
        'pages',
        'word_length',
        'isbn',
        'story_summary',
        'journal_summary'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];
}
