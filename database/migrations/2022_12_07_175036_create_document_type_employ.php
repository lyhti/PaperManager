<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentTypeEmploy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_type_employ', function (Blueprint $table) {
            $table->bigInteger('entrps_sn')->unsigned()->comment('업체_일련번호');
            $table->bigInteger('document_type_sn')->unsigned()->comment('문서종류_일련번호');
            $table->bigInteger('crt_user_sn')->unsigned()->comment('생성자');
            $table->dateTime('crt_dt')->comment('생성_일시');
            $table->bigInteger('udt_user_sn')->unsigned()->comment('수정자');
            $table->dateTime('udt_dt')->comment('수정_일시');
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
        Schema::dropIfExists('document_type_employ');
    }
}
