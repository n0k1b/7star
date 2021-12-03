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
            $table->bigInteger('vendor_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('dietary_id')->unsigned();
            $table->string('thumbnail_image');
            $table->string('price');
            $table->integer('featured_status')->default(0);
            $table->integer('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('product_types')->onDelete('cascade');
            $table->foreign('dietary_id')->references('id')->on('product_dietaries')->onDelete('cascade');
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
