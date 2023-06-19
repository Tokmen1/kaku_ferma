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
            $table->string('Vetarsts_PK', 50);
            $table->foreign('Vetarsts_PK')->references('PK')->on('vetarsts')->onDelete('cascade');
            $table->string('image')->nullable();
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
