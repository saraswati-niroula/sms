<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->string('fathers_name',255);
            $table->string('mothers_name',255);
            $table->string('fathers_phone',10);
            $table->string('mothers_phone',10);
            $table->string('guardians_name',10);
            $table->string('guardians_phone',10);
            $table->string('guardians_email',10);
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
        Schema::dropIfExists('family_infos');
    }
}
