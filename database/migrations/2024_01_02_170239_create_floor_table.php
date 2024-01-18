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
        Schema::create('floor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('building_id');
            $table->foreign('building_id')->references('id')->on('building')->onDelete('cascade');
            $table->string('Name', 120);
            $table->double('size', 8, 2);
            $table->integer('NoOfOffices');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('floor');
    }
};