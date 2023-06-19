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
        Schema::create('kakis_rotallieta', function (Blueprint $table) {
            $table->string('Rotallieta_ID', 50);
            $table->integer('Kakis_Cipa_Num', 50);
            $table->primary(['Kakis_Cipa_Num', 'Rotallieta_ID']);
            $table->foreign('Rotallieta_ID')->references('ID')->on('rotallieta')->onDelete('cascade');
            $table->foreign('Kakis_Cipa_Num')->references('PK')->on('kakis')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kakis_rotallieta');
    }
};
