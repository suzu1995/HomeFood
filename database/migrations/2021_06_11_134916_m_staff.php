<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MStaff extends Migration
{
    /**
     * スタッフテーブルを作成する
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_staff', function (Blueprint $table) {
            $table->bigIncrements('staff_id');
            $table->string('staff_name',50);
            $table->string('staff_password',50);
        });
    }

    /**
     * スタッフテーブルを削除する
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_staff');
    }
}
