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
            $table->string('category');
            $table->string('name');
            $table->decimal('initialPrice', 8, 2);
            $table->decimal('discountedPrice', 8, 2);
            $table->string('firstImage');
            $table->string('secondImage');
            $table->string('thirdImage');
            $table->string('fourthImage');
            $table->text('specifications');
            $table->text('brandName');
            $table->text('productDescription');
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
