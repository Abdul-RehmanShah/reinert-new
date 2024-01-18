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
        Schema::create('contract', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('office_id');
            $table->foreign('office_id')->references('id')->on('office')->onDelete('cascade');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
            $table->string('Vollname', 120);
            $table->string('Office_Name', 120);
            $table->date('Start_date');
            $table->date('End_date');
            $table->bigInteger('Contract_Period');
            $table->double('Year_Increment', 8, 2);
            $table->double('office_Size', 5, 2);
            $table->double('MieteProM2', 8, 2);
            $table->double('Kalt_Miete', 8, 2);
            $table->double('Reinigung_Kosten', 8, 2);
            $table->double('Extra_Land_size', 8, 2);
            $table->double('Extra_Land_Miete_ProM2', 8, 2);
            $table->double('Net_Extra_Land_Mieten', 8, 2);
            $table->double('No_Of_Park_Platz', 8, 2);
            $table->double('Pro_Park_Platz_Mieten', 8, 2);
            $table->double('Net_Park_Platz_Mieten', 8, 2);
            $table->double('Net_Kalt_Miete', 8, 2);
            $table->double('Steuer', 8, 2);
            $table->double('Warm_Miete_ohne_Nebenkosten', 8, 2);
            $table->double('Nebenkosten', 8, 2);
            $table->double('Nebenkosten_mit_Steuer', 8, 2);
            $table->double('Warm_Miete', 8, 2);
            $table->longtext('docs_upload');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract');
    }
};
