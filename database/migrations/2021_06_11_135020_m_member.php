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
            $table->primary('member_id');
            $table->timestamp('member_date');
            $table->string('member_name',50);
            $table->string('member_password',50);
            $table->string('member_email',255);
            $table->integer('member_postal1',15);
            $table->integer('member_postal2',15);
            $table->string('member_address',100);
            $table->integer('member_tel',15);
            $table->integer('member_sex',1);
            $table->integer('member_birth',10);

            $table->primary(['member_id']);
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
