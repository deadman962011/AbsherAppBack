<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsherSubEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absher_sub_emps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('EmpName');
            $table->String('EmpPhone');
            $table->String('EmpUser');
            $table->String('EmpPass');
            $table->integer('EmpType');
            $table->integer('EmpPer');
            $table->BigInteger('EmpSub')->unsigned()->index();
            $table->foreign('EmpSub')->references('id')->on('absher_subs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absher_sub_emps');
    }
}
