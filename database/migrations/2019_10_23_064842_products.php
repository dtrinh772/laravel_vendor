<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('productName', 50)->unique();
            $table->longText('description');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->decimal('reducedPrice', 8, 2);
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->dateTime('datesubmit');
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
