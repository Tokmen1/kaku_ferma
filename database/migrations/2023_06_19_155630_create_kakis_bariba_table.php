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
        Schema::create('kakis_bariba', function (Blueprint $table) {
            //$table->integer('Bariba_ID', 50);
            // $table->integer('Kakis_Cipa_Num', 50);
            $table->foreignId('Bariba_ID')->on('bariba')->onDelete('cascade');
            $table->foreignid('Kakis_Cipa_Num')->on('kakis')->onDelete('cascade');
            $table->unique(['Kakis_Cipa_Num', 'Bariba_ID'])->primary();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kakis_bariba');
    }
};
