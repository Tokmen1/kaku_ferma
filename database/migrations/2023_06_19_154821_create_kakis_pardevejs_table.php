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
        Schema::create('kakis_pardevejs', function (Blueprint $table) {
            $table->string('Pardeveja_PK', 50);
            $table->integer('Kakis_Cipa_Num', 50);
            $table->primary(['Kakis_Cipa_Num', 'Iepircejs_PK']);
            $table->foreign('Pardeveja_PK')->references('PK')->on('pardevejs')->onDelete('cascade');
            $table->foreign('Kakis_Cipa_Num')->references('PK')->on('kakis')->onDelete('cascade');
            $table->timestamps('Darijuma_datums');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kakis_pardevejs');
    }
};
