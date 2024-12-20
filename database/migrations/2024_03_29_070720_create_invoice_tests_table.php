<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice_tests', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id');
            $table->integer('test_id');
            $table->integer('amount');
            $table->integer('quantity');
            $table->integer('total_amount');        
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_tests');
    }
};
