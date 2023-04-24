<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table) {
            $table->bigIncrements('document_sn')->comment('문서_일련번호');
            $table->bigInteger('document_type_sn')->unsigned()->comment('문서종류_일련번호');
            $table->bigInteger('entrps_sn')->unsigned()->comment('업체_일련번호');
            $table->string('title', 100)->comment('문서_이름');
            $table->decimal('version', 3, 2)->default(1.00)->comment('문서_버전');
            $table->tinyInteger('tab_cnt')->default(1)->comment('문서_탭_개수');
            $table->boolean('use_yn')->default(true)->comment('문서_사용여부');
            $table->bigInteger('crt_user_sn')->unsigned()->comment('생성자');
            $table->dateTime('crt_dt')->comment('생성_일시');
            $table->bigInteger('udt_user_sn')->unsigned()->comment('수정자');
            $table->dateTime('udt_dt')->comment('수정_일시');
            $table->softDeletes('del_dt')->comment('삭제_일시');

//            $table->foreign('document_type_sn')->references('document_type_sn')->on('document_type');
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
        Schema::dropIfExists('document');
    }
}
