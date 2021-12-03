<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageSectionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_section_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('homepage_section_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->string('campaign_start_date')->nullable();
            $table->string('campaign_end_date')->nullable();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('homepage_section_id')->references('id')->on('homepage_sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepage_section_products');
    }
}
