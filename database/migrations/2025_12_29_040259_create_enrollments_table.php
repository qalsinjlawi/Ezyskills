<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('enrollments', function (Blueprint $table) {
        $table->id('enrollment_id');
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('course_id')->constrained('courses', 'course_id')->onDelete('cascade');
        $table->timestamp('enrollment_date')->useCurrent();
        $table->unique(['user_id', 'course_id']);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
