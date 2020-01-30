<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level')->nullable();
            $table->string('book_title')->nullable();
            $table->string('story_title_link')->nullable();
            $table->string('authors')->nullable();
            $table->string('series')->nullable();
            $table->string('reader_type')->nullable();
            $table->string('category_topic')->nullable();
            $table->string('resource_type')->nullable();
            $table->string('text_type')->nullable();
            $table->string('waka_canoe')->nullable();
            $table->string('iwi_tribe')->nullable();
            $table->string('hap_village')->nullable();
            $table->string('published_date')->nullable();
            $table->string('publisher')->nullable();
            $table->string('pages')->nullable();
            $table->string('word_length')->nullable();
            $table->string('isbn')->nullable();
            $table->text('story_summary')->nullable();
            $table->text('journal_summary')->nullable();
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
        Schema::dropIfExists('books');
    }
}
