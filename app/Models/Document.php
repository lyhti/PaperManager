<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Document
 * @package App\Models
 * @version 2022-11-28
 *
 * @property int document_sn
 * @property int document_type_sn
 * @property int entrps_sn
 * @property string title
 * @property double version
 * @property int tab_cnt
 * @property boolean use_yn
 * @property int crt_user_sn
 * @property int udt_user_sn
 *
 */
class Document extends Model {
    use SoftDeletes;

    public $table = 'document';
    protected $primaryKey = 'document_sn';
    const CREATED_AT = 'crt_dt';
    const UPDATED_AT = 'udt_dt';
    const DELETED_AT = 'del_dt';

    /**
     * The attributes that aren't mass assignable. / 배열로 insert를 하기위한 선언
     *
     * @var array
     */
    protected $guarded = [];
}
