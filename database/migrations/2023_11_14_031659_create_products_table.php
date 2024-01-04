<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category');
            $table->string('label')->unique();
            $table->string('slug')->nullable()->unique(); // Brief descrption
            $table->integer('available')->default(0); // 0 or 1
            $table->decimal('price', 10, 2)->nullable();
            $table->text('desc')->nullable();
            $table->string('density')->nullable();
            $table->string('length')->nullable(); // en pouces ; 20 pouces
            $table->string('texture')->nullable();
            $table->string('usage_delay')->nullable();
            $table->string('color')->nullable();
            $table->string('elastic_band')->nullable(); // Bande d'elastique : ajustable
            $table->string('a_image')->nullable();
            $table->string('b_image')->nullable();
            $table->string('c_image')->nullable();
            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
