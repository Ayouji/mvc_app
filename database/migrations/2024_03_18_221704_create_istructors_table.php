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
        Schema::create('istructors', function (Blueprint $table) {
            $table->unsignedBigInteger('instructor_id')->primary()->autoIncrement();
            $table->string('last_name', 100);
            $table->string('first_midname', 50);
            $table->date('hiredate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('istructors');
    }
};
