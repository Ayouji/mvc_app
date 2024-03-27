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
        Schema::create('office_assigns', function (Blueprint $table) {
            $table->unsignedBigInteger('officeAssign_id')->primary()->autoIncrement();
            $table->string('location', 100);
            $table->unsignedBigInteger('instructor_id');
            $table->foreign('instructor_id')->references('instructor_id')->on('istructors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_assigns');
    }
};
