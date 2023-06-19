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
            $table->string('Bariba_ID', 50);
            $table->integer('Kakis_Cipa_Num', 50);
            $table->primary(['Kakis_Cipa_Num', 'Bariba_ID']);
            $table->foreign('Bariba_ID')->references('ID')->on('bariba')->onDelete('cascade');
            $table->foreign('Kakis_Cipa_Num')->references('PK')->on('kakis')->onDelete('cascade');
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
