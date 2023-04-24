<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_type', function (Blueprint $table) {
            $table->bigIncrements('document_type_sn')->comment('문서종류_일련번호');
            $table->string('document_type_nm', 255)->comment('문서종류_이름');
            $table->string('code_abbreviation', 255)->comment('문서종류_구분코드_약어');
            $table->string('code_expansion', 255)->comment('문서종류_구분코드_전체');
            $table->decimal('version', 3, 2)->default(1.00)->comment('문서종류_버전');
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
        Schema::dropIfExists('document_type');
    }
}
