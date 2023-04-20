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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('semester');
            $table->string('group', 4);
            $table->date('return_date');
            $table->string('type', 45)->nullable()->default('EXTERNO');
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();

            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('user_id')->constrained('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
