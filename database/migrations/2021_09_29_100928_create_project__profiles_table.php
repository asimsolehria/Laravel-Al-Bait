<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_profiles', function (Blueprint $table) {
            $table->bigIncrements('ProjectId');
            $table->string('Project_Code');
            $table->string('Project_title');
            $table->string('location');
            $table->text('Project_Overview');
            $table->integer('ClientID');
            $table->integer('Focal_PersonID');
            $table->integer('SupervisorID');
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
        Schema::dropIfExists('project__profiles');
    }
}
