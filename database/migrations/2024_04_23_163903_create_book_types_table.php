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
        Schema::create('book_type', function (Blueprint $table) {
            $table->integer('typeId')->unsigned();
            $table->integer('bookId')->unsigned();
            $table->foreign('typeId')->references('typeId')->on('types')->onDelete('cascade');
            $table->foreign('bookId')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_types');
    }
};
