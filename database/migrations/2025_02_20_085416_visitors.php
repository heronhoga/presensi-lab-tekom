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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->nullable();
            $table->unsignedBigInteger('id_lab')->nullable();
            $table->dateTime('check_in')->nullable();
    
            $table->foreign('nim')->references('nim')->on('students')->onDelete('set null');
            $table->foreign('id_lab')->references('id')->on('labs')->onDelete('set null');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
