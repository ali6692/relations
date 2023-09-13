<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',60);
            $table->string('email',100);
            $table->enum('gender',["M","F","O"])->nullable();
            $table->longText('subjects');
            $table->text('address');
            $table->string('password')->default('abc');
            $table->date('dob')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
