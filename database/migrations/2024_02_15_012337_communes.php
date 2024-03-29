<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('communes', function (Blueprint $table) {
            $table->id('id_com')->autoIncrement();
            $table->foreignId('id_reg');
            $table->string('description');
            $table->enum('status', ['I', 'A', 'trash'])->default('A');

        });
    }

    public function down(): void
    {
        Schema::drop('commiunes');
    }
};
