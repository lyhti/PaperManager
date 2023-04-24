<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Enterprise
 * @package App\Models
 * @version 2022-11-28
 *
 * @property int entrps_sn
 * @property string entrps_nm
 * @property string brno
 * @property string email
 * @property string rprsv_nm
 * @property string tel_number
 * @property string fax_number
 * @property string zip
 * @property string address
 * @property string detail_address
 * @property int crt_user_sn
 * @property int udt_user_sn
 *
 */
class Enterprise extends Model {
    use SoftDeletes;

    public $table = 'entrps';
    protected $primaryKey = 'entrps_sn';
    const CREATED_AT = 'crt_dt';
    const UPDATED_AT = 'udt_dt';
    const DELETED_AT = 'del_dt';

    /**
     * The attributes that aren't mass assignable. / 배열로 insert를 하기위한 선언
     *
     * @var array
     */
    protected $guarded = [];

    //============LOCAL SCOPE==============

    /**
     * 업체명 조회
     */
    public function scopeNmLike($query, $key) {
        return $query->where('entrps_nm', 'like', '%'.$key.'%');
    }

    /**
    * 사업자 번호 조회
    */
    public function scopeGetBrno($query, $brno) {
        return $query->where('brno', $brno);
    }

    //============ATTRIBUTE==============

    /*
     * 사업자등록번호 포맷
     */
    public function getBrnoFormatAttribute() {
        $value = $this->brno;
        $digit3 = substr($value, 0, 3);
        $digit2 = substr($value, 3, 2);
        $digit5 = substr($value, 5, 5);
        return $digit3.'-'.$digit2.'-'.$digit5;
    }
}
