<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_column', function (Blueprint $table) {
            $table->bigIncrements('document_column_sn')->comment('문서컬럼_일련번호');
            $table->bigInteger('document_type_sn')->unsigned()->comment('문서종류_일련번호');
            $table->string('document_column_nm', 255)->comment('문서컬럼_이름');
            $table->string('value', 255)->comment('문서컬럼_값');
            $table->boolean('file_flag_yn')->default(false)->comment('문서컬럼_파일업로드_유무');
            $table->bigInteger('crt_user_sn')->unsigned()->comment('생성자');
            $table->dateTime('crt_dt')->comment('생성_일시');
            $table->bigInteger('udt_user_sn')->unsigned()->comment('수정자');
            $table->dateTime('udt_dt')->comment('수정_일시');
            $table->softDeletes('del_dt')->comment('삭제_일시');

//            $table->foreign('document_type_sn')->references('document_type_sn')->on('document_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_column');
    }
}
