<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsherProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absher_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ProductName');
            $table->integer('ProductPrice');
            $table->string('ProductDesc');
            $table->BigInteger('ProductCategory')->unsigned()->index();
            $table->foreign('ProductCategory')->references('id')->on('absher_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absher_products');
    }
}
