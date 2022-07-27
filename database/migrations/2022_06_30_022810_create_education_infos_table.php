<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_infos', function (Blueprint $table) {
              
                $table->bigIncrements('id');
                $table->unsignedBigInteger('student_id');
                $table->string('board',10);
                $table->string('institute_name',255);
                $table->string('per_cgpa',5);
                $table->string('symbol_number',10)->unique();
                $table->string('passed_year',4);
           
                // foriegn key usage
                $table->foreign('student_id')->references('id')->on('students')
                ->on('students')->onDelete('CASCADE'); 
               
                
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
        Schema::dropIfExists('education_infos');
    }
}
