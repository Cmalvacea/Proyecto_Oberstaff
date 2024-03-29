<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customSession', function (Blueprint $table) {
            $table->id('sessionId')->autoIncrement();
            $table->string('token', 100);
            $table->dateTimeTz('fechaInicio')->useCurrent();
            $table->dateTimeTz('fechaFin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('customSession');
    }
};
