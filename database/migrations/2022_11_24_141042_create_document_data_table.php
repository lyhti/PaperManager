<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_data', function (Blueprint $table) {
            $table->bigIncrements('document_data_sn')->comment('문서데이터_일련번호');
            $table->bigInteger('document_sn')->unsigned()->comment('문서_일련번호');
            $table->bigInteger('document_column_sn')->unsigned()->comment('문서컬럼_일련번호');
            $table->string('value', 255)->nullable()->comment('문서데이터_값');
            $table->string('param_01', 255)->nullable()->comment('임시_01');
            $table->string('param_02', 255)->nullable()->comment('임시_02');
            $table->string('param_03', 255)->nullable()->comment('임시_03');
            $table->string('param_04', 255)->nullable()->comment('임시_04');
            $table->string('param_05', 255)->nullable()->comment('임시_05');
            $table->string('param_06', 255)->nullable()->comment('임시_06');
            $table->string('param_07', 255)->nullable()->comment('임시_07');
            $table->string('param_08', 255)->nullable()->comment('임시_08');
            $table->string('param_09', 255)->nullable()->comment('임시_09');
            $table->string('param_10', 255)->nullable()->comment('임시_10');
            $table->bigInteger('crt_user_sn')->unsigned()->comment('생성자');
            $table->dateTime('crt_dt')->comment('생성_일시');
            $table->bigInteger('udt_user_sn')->unsigned()->comment('수정자');
            $table->dateTime('udt_dt')->comment('수정_일시');
            $table->softDeletes('del_dt')->comment('삭제_일시');

//            $table->foreign('document_sn')->references('document_sn')->on('document');
//            $table->foreign('document_column_sn')->references('document_column_sn')->on('document_column');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_data');
    }
}
