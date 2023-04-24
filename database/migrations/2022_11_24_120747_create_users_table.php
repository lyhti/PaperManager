<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_sn')->comment('유저_일련번호');
            $table->bigInteger('entrps_sn')->unsigned()->comment('업체_일련번호');
            $table->string('user_nm', 50)->comment('유저_이름');
            $table->string('email', 50)->comment('이메일');
            $table->string('password', 200)->comment('비밀번호');
            $table->string('phone_number', 24)->nullable()->comment('전화번호');
            $table->string('api_token', 64)->nullable()->comment('api_token');
            $table->rememberToken()->nullable()->comment('remember_token');
            $table->boolean('approved')->default(true)->comment('승인여부');
            $table->bigInteger('crt_user_sn')->unsigned()->comment('생성자');
            $table->dateTime('crt_dt')->comment('생성_일시');
            $table->bigInteger('udt_user_sn')->unsigned()->comment('수정자');
            $table->dateTime('udt_dt')->comment('수정_일시');
            $table->softDeletes('del_dt')->comment('삭제_일시');

//            $table->foreign('entrps_sn')->references('entrps_sn')->on('entrps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
