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
        Schema::create('sponsorship_packages', function (Blueprint $column) {
            $column->id();
            $column->string('name');
            $column->string('slug')->unique();
            $column->text('description')->nullable();
            $column->decimal('price', 15, 2);
            $column->json('features');
            $column->boolean('is_active')->default(true);
            $column->integer('order')->default(0);
            $column->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsorship_packages');
    }
};
