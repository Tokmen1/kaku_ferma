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
        Schema::create('kakis', function (Blueprint $table) {
            $table->integer('Cipa_numurs')->primary();
            $table->string('Vards', 100);
            $table->date('Dzimsanas_dati');
            $table->tinyInteger('Veselibas_stavoklis');
            $table->boolean('Nopirkts');
            $table->string('Vetersts_PK', 50);
            $table->foreign('Vetersts_PK')->references('PK')->on('vetersts')->onDelete('cascade');
            $table->string('Iepircējs_PK', 50);
            $table->foreign('Iepircējs_PK')->references('PK')->on('iepircejs')->onDelete('cascade');
            $table->string('Pārdevēja_PK', 50);
            $table->foreign('Pārdevēja_PK')->references('PK')->on('pardevejs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kakis');
    }
};
