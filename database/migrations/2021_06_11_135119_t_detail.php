<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_detail', function (Blueprint $table) {
            $table->bigIncrements('detail_id');
            $table->bigInteger('sale_id');
            $table->bigInteger('product_id');
            $table->string('product_price',30);
            $table->integer('product_quantity',false,false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_detail');
    }
}
