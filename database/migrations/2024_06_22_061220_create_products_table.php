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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreignId('category_id')
            ->constrained('categories')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->unsignedBigInteger('brand_id')
            ->nullable();

            $table->unsignedBigInteger('updated_by')
            ->nullable();

            $table->string('title');
            $table->string('slug')->unique();
            $table->mediumText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('sku')->nullable();
            $table->integer('stock')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('bar_code')->nullable();
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->enum('status', ['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
