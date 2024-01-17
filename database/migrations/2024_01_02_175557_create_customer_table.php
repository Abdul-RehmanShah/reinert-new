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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('Vorname', 120);
            $table->string('Nachname', 120);
            $table->string('Vollname', 120);
            $table->string('Email', 120);
            $table->bigInteger('kontakt');
            $table->string('konto_nummer', 35);
            $table->string('steuer_id', 12);
            $table->double('steuer_Prozent', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
