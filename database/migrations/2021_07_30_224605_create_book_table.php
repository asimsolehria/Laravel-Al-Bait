<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_infos', function (Blueprint $table) {
            $table->bigIncrements('book_no');
            $table->date('date_of_adm');
            $table->string('std_name');
            $table->integer('book_number');
            $table->integer('book_type_id');
            $table->integer('book_id');
            $table->integer('book_status_id');
            $table->integer('subject_id');
            $table->integer('nature_id');
            $table->string('keywords');
            $table->string('nature_of_knowledge');
            $table->integer('knowledge_no');
            $table->integer('compile_id');
            $table->integer('class_no');
            $table->integer('research_id');
            $table->integer('author_id');
            $table->integer('language_id');
            $table->string('name');
            $table->integer('author_belief_id');
            $table->string('publisher');
            $table->date('date_of_death');
            $table->date('purchase_add');
            $table->date('date_of_entery');
            $table->string('printing_press');
            $table->string('recieved_by');
            $table->integer('parts_of_book');
            $table->string('place_of_reward');
            $table->integer('pages');
            $table->integer('explanator_id');
            $table->integer('price');
            $table->string('volume');
            $table->string('publish_place');
            $table->string('isbn');
            $table->date('publishing_year');
            $table->string('book_volume');
            $table->string('print_nature');
            $table->string('book_quality');
            $table->integer('location_id');
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
        Schema::dropIfExists('book_infos');
    }
}