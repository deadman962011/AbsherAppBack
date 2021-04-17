<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsherCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absher_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('CategoryName');
            $table->String('CategoryDesc');
            $table->String('CategoryImg');
            $table->integer('ProdNum')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absher_categories');
    }
}
