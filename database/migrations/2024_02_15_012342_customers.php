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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customersId')->primaryKey();
            $table->foreignId('id_reg');
            $table->foreignId('id_com');
            $table->string('dni')->unique();
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->dateTime('date_reg')->useCurrent();
            $table->enum('status', ['I', 'A', 'trash'])->default('A');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('customers');
    }
};
