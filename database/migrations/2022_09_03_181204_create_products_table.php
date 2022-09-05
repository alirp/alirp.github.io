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
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('asset_media_id');
            $table->foreign('asset_media_id')->references('id')->on('assets_media');
            $table->string('name');
            $table->double('price');
            $table->string('size');
            $table->string('thickness');
            $table->integer('count_in_m2');
            $table->integer('count_in_box');
            $table->string('info');
            $table->string('color');
            $table->double('box_weight');
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
