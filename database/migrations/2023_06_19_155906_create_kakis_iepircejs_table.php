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
        Schema::create('kakis_iepircejs', function (Blueprint $table) {
            $table->string('Iepircejs_PK', 50)->foreign('Iepircejs_PK')
                ->references('PK')->on('iepircejs')->onDelete('cascade');
            $table->foreignId('Kakis_Cipa_Num')->on('kakis')->onDelete('cascade');
            $table->primary(['Kakis_Cipa_Num', 'Iepircejs_PK']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kakis_iepircejs');
    }
};
