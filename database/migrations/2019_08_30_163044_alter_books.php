<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_new', function (Blueprint $table) {
            $table->increments('id');
            $table->string('taumata_marautanga')->nullable();
            $table->string('taumata_panui')->nullable();
            $table->string('curriculum_level')->nullable();
            $table->string('reading_level')->nullable();
            $table->string('book_title')->nullable();
            $table->string('link')->nullable();
            $table->string('story_title_link')->nullable();
            $table->string('authors')->nullable();
            $table->string('published_date')->nullable();
            $table->string('publisher')->nullable();
            $table->string('isbn')->nullable();
            $table->string('page_number')->nullable();
            $table->string('pages')->nullable();
            $table->string('word_length')->nullable();
            $table->string('series')->nullable();
            $table->string('resource_type')->nullable();
            $table->string('text_type')->nullable();
            $table->string('topic_1')->nullable();
            $table->string('topic_2')->nullable();
            $table->string('topic_3')->nullable();
            $table->string('topic_4')->nullable();
            $table->string('topic_5')->nullable();
            $table->string('topic_6')->nullable();
            $table->string('topic_7')->nullable();
            $table->string('waka_canoe_1')->nullable();
            $table->string('waka_canoe_2')->nullable();
            $table->string('iwi_tribe_1')->nullable();
            $table->string('iwi_tribe_2')->nullable();
            $table->string('hapa_village_1')->nullable();
            $table->string('hapa_village_2')->nullable();
            $table->string('important_person_1')->nullable();
            $table->string('important_person_2')->nullable();
            $table->string('learning_area_1')->nullable();
            $table->string('learning_area_2')->nullable();
            $table->string('learning_area_3')->nullable();
            $table->string('wahanga_ako_1')->nullable();
            $table->string('wahanga_ako_2')->nullable();
            $table->string('wahanga_ako_3')->nullable();
            $table->string('story_summary')->nullable();
            $table->string('book_summary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_new');
    }
}
