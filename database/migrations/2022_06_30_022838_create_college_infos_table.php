<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('semester_id');
            $table->unsignedBigInteger('student_id');
            $table->string('tureg_number',15)->unique();
            $table->string('symbol_number',15)->unique();
       
            // foriegn key usage
            $table->foreign('student_id')->references('id')->on('students')
            ->on('students')->onDelete('CASCADE');
            $table->timestamps();
            $table->foreign('batch_id')->references('id')->on('batches')
            ->on('batches');
            $table->foreign('semester_id')->references('id')->on('semesters')
            ->on('semesters');
            $table->foreign('faculty_id')->references('id')->on('faculties')
            ->on('faculties');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('college_infos');
    }
}
