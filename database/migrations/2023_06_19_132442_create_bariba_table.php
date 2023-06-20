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
        Schema::create('bariba', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nosaukums', 100);
            $table->string('Razotajs', 100);
            $table->boolean('Ir_biologisks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bariba');
    }
};
