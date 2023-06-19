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
        Schema::create('pardevejs', function (Blueprint $table) {
            $table->string('PK', 50)->primary();
            $table->string('Vards', 100);
            $table->string('Uzvards', 100);
            $table->string('Telefona_nr', 50);
            $table->string('Konta_nr', 255);
            $table->date('Darijuma_datums');
            $table->tinyInteger('Kvalitate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pardevejs');
    }
};
