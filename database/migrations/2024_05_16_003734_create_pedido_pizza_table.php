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
        Schema::create('pedido_pizza', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizza_id')->constrained();
            $table->foreignId('pedido_id')->constrained();
            $table->integer('cantidad');
            $table->integer('precio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_pizza');
    }
};
