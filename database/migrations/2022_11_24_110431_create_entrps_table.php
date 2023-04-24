<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrps', function (Blueprint $table) {
            $table->bigIncrements('entrps_sn')->comment('업체_일련번호');
            $table->string('entrps_nm', 50)->comment('업체명');
            $table->char('brno', 10)->comment('사업자번호');
            $table->string('email', 50)->comment('이메일');
            $table->string('rprsv_nm', 50)->comment('대표_이름');
            $table->string('tel_number', 24)->nullable()->comment('전화번호');
            $table->string('fax_number', 24)->nullable()->comment('팩스번호');
            $table->string('zip', 6)->comment('우편번호');
            $table->string('address', 255)->comment('주소');
            $table->string('detail_address', 255)->nullable()->comment('상세주소');
            $table->bigInteger('crt_user_sn')->unsigned()->comment('생성자');
            $table->dateTime('crt_dt')->comment('생성_일시');
            $table->bigInteger('udt_user_sn')->unsigned()->comment('수정자');
            $table->dateTime('udt_dt')->comment('수정_일시');
            // softDeletes 함수 찾아 timestamps -> dateTime 으로 변경.
            $table->softDeletes('del_dt')->comment('삭제_일시');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrps');
    }
}
