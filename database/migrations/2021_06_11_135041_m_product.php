<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MProduct extends Migration
{
    /**
     * 商品テーブルを作成する
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name',50);
            $table->string('product_price',30);
            $table->string('product_gazou',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_product');
    }
}
