<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{

    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('test_name');
            $table->timestamps(); 
            $table->string('test_description');
            $table->string('department');
            $table->integer('price');
            $table->date('date');
        });
    }


    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
