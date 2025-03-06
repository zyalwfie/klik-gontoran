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
            $table->json('image');
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'products_category_id'
            );
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->text('address');
            $table->foreignId('owner_id')->constrained(
                table: 'owners',
                indexName: 'products_owner_id'
            );
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
