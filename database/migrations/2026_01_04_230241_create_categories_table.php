<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            $table->string('icon', 100)->nullable();
            $table->string('color', 50)->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // إضافة علاقة categories للـ courses
        Schema::table('courses', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->after('course_id')->constrained('categories', 'category_id')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
        
        Schema::dropIfExists('categories');
    }
};