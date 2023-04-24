<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

/**
 * Class DocumentType
 * @package App\Models
 * @version 2022-11-28
 *
 * @property int document_type_sn
 * @property string document_type_nm
 * @property string code_abbreviation
 * @property string code_expansion
 * @property double version
 * @property int crt_user_sn
 * @property int udt_user_sn
 *
 */
class DocumentType extends Model {
    use SoftDeletes;

    public $table = 'document_type';
    protected $primaryKey = 'document_type_sn';
    const CREATED_AT = 'crt_dt';
    const UPDATED_AT = 'udt_dt';
    const DELETED_AT = 'del_dt';

    /**
     * The attributes that aren't mass assignable. / 배열로 insert를 하기위한 선언
     * @var array
     */
    protected $guarded = [];

    //============LOCAL SCOPE==============

    /*
     * document_type_sn
     */
    public function scopeDocTypeSn($query, $key){
        return $query->where('code_abbreviation', $key)
            ->first()->document_type_sn;
    }

    /*
     * document_type_employ 조인
     */
    public function scopeJoinTypeEmploy($query){
        return $query->join('document_type_employ as dte', 'document_type.document_type_sn', '=', 'dte.document_type_sn')
            ->where('dte.entrps_sn', Auth::user()->entrps_sn);
    }
}
