<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product');
            $table->unsignedBigInteger('user');
            $table->integer('qty')->default(0);
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('delivery_mode')->nullable();
            $table->string('transaction_code')->nullable();
            $table->foreign('product')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('purchases');
    }
}
