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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique()->nullable();
            $table->string('nombre')->unique();
            $table->integer('stock')->default(0);
            $table->string('imagen');
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->		on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
