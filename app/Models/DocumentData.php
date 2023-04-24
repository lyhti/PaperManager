<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocumentData
 * @package App\Models
 * @version 2022-11-28
 *
 * @property int document_data_sn
 * @property int document_sn
 * @property int document_column_sn
 * @property string document_data_value
 * @property string param_01
 * @property string param_02
 * @property string param_03
 * @property string param_04
 * @property string param_05
 * @property string param_06
 * @property string param_07
 * @property string param_08
 * @property string param_09
 * @property string param_10
 * @property int crt_user_sn
 * @property int udt_user_sn
 *
 */
class DocumentData extends Model {
    use SoftDeletes;

    public $table = 'document_data';
    protected $primaryKey = 'document_data_sn';
    const CREATED_AT = 'crt_dt';
    const UPDATED_AT = 'udt_dt';
    const DELETED_AT = 'del_dt';

    /**
     * The attributes that aren't mass assignable. / 배열로 insert를 하기위한 선언
     * @var array
     */
    protected $guarded = [];
}
