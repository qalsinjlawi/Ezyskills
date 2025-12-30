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
    Schema::create('pricing_plans', function (Blueprint $table) {
        $table->id('plan_id');
        $table->string('name', 100);
        $table->decimal('price', 10, 2);
        $table->integer('duration_months');
        $table->text('features')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};
