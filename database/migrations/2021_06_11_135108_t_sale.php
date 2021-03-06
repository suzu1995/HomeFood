<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_sale', function (Blueprint $table) {
            $table->bigIncrements('sale_id');
            $table->bigInteger('member_id');
            $table->timestamp('sale_date');
            $table->string('sale_name',50);
            $table->string('sale_email',255);
            $table->integer('sale_postal1');
            $table->integer('sale_postal2');
            $table->string('sale_address',100);
            $table->integer('sale_tel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_sale');
    }
}
