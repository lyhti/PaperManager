<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocumentColumn
 * @package App\Models
 * @version 2022-11-28
 *
 * @property int document_column_sn
 * @property int document_type_sn
 * @property string document_column_nm
 * @property string document_column_value
 * @property string document_column_default_value
 * @property boolean file_flag_yn
 * @property int crt_user_sn
 * @property int udt_user_sn
 *
 */
class DocumentColumn extends Model {
    use SoftDeletes;

    public $table = 'document_column';
    protected $primaryKey = 'document_column_sn';
    const CREATED_AT = 'crt_dt';
    const UPDATED_AT = 'udt_dt';
    const DELETED_AT = 'del_dt';

    /**
     * The attributes that aren't mass assignable. / 배열로 insert를 하기위한 선언
     * @var array
     */
    protected $guarded = [];
}
