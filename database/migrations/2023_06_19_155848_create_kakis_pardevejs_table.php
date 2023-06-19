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
            $table->string('Pardeveja_PK', 50)->foreign('Pardeveja_PK')
                ->references('PK')->on('pardevejs')->onDelete('cascade');
            $table->foreignId('Kakis_Cipa_Num')->on('kakis')->onDelete('cascade');
            $table->unique(['Kakis_Cipa_Num', 'Pardeveja_PK'])->primary();

            $table->timestamps();
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
