<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up():void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('email',100);
            $table->enum('gender',["M","F","O"])->nullable();
            $table->longText('address');
            $table->date('dob')->nullable();
            $table->integer('mobile_no');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('pin_code');
            $table->timestamps();
        });
    }
    public function down():void
    {
        Schema::dropIfExists('students');
    }
};
