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
        Schema::create('vetarsts', function (Blueprint $table) {
            $table->string('PK', 50)->primary();
            $table->string('Vards', 100);
            $table->string('Uzvards', 100);
            $table->date('Stazs');
            $table->string('Telefona_nr', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vetarsts');
    }
};
