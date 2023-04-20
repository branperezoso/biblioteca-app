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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('barcode', 20)->unique();
            $table->text('title');
            $table->string('author', 500);
            $table->unsignedTinyInteger('edition');
            $table->string('area', 100);
            $table->string('publishing_house', 200);
            $table->string('comment', 200)->nullable();
            $table->unsignedSmallInteger('quantity')->nullable();
            $table->string('origin', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
