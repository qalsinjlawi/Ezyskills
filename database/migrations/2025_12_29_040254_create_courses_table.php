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
    Schema::create('courses', function (Blueprint $table) {
        $table->id('course_id');
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('image_url', 500)->nullable();
        $table->decimal('price', 10, 2)->default(0);
        $table->integer('duration_hours')->nullable();
        $table->string('level', 50)->nullable();
                    $table->enum('status', ['opened', 'coming_soon', 'archived'])->default('opened'); // ← أضف هذا السطر


                    $table->json('objectives')->nullable();
            $table->json('curriculum')->nullable();
            $table->json('projects')->nullable();
            $table->json('tools')->nullable();


        $table->foreignId('instructor_id')->constrained('instructors', 'instructor_id')->onDelete('cascade');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
