<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

/**
 * Class DocumentType
 * @package App\Models
 * @version 2022-12-07
 *
 * @property int entrps_sn
 * @property int document_type_sn
 * @property int crt_user_sn
 * @property int udt_user_sn
 *
 */
class DocumentTypeEmploy extends Model {
    use SoftDeletes;

    public $table = 'document_type_employ';
    protected $primaryKey = null;
    public $incrementing = false;

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
     * 업체별 사용 문서 조회
     */
    public function scopeOurs($query){
        return $query->where('entrps_sn', Auth::user()->entrps_sn);
    }
}
