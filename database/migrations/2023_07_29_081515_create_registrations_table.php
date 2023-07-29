<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('email',100);
            $table->enum('gender',["M","F","O"]);
            $table->text('address');
            $table->date('dob');
            $table->string('password')->default('abc');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('registration');
    }
};
