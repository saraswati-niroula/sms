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
        //         $table->bigIncrements('id');
        //         $table->sting('board');
        //         $table->sting('institute_name');
        //         $table->float('percentage/gpa');
        //         $table->int('symbol_number',10);
                // $table->int('student_id');
                // $table->string('name', 150);
                // $table->string('mobile', 10)->unique();
                // $table->string('citizenship', 20)->unique(); 
                // $table->string('gender', 1);
                // $table->string('blood_group', 3);
                // $table->string('perm_address');
                // $table->string('temp_address');
                // $table->string('email', 10);
                // $table->date('dob');
                // $table->string('picture')->nullable();
                // $table->boolean('is_active')->default(true);
                // $table->boolean('is_almuni');
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
