<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_member', function (Blueprint $table) {
            $table->bigIncrements('member_id');
            $table->timestamp('member_date');
            $table->string('member_name',50);
            $table->string('member_password',50);
            $table->string('member_email',255);
            $table->integer('member_postal1',false,false);
            $table->integer('member_postal2',false,false);
            $table->string('member_address',100);
            $table->integer('member_tel',false,false);
            $table->integer('member_sex',false,false);
            $table->integer('member_birth',false,false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_member');
    }
}
