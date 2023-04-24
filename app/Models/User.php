<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * @package App\Models
 * @version 2022-11-28
 *
 * @property int user_sn
 * @property int entrps_sn
 * @property string user_nm
 * @property string email
 * @property string password
 * @property string phone_number
 * @property string api_token
 * @property string remember_token
 * @property boolean approved
 * @property int crt_user_sn
 * @property int udt_user_sn
 *
 */
class User extends Authenticatable {
    use SoftDeletes, HasApiTokens, Notifiable;

    public $table = 'users';
    protected $primaryKey = 'user_sn';
    const CREATED_AT = 'crt_dt';
    const UPDATED_AT = 'udt_dt';
    const DELETED_AT = 'del_dt';

    //============LOCAL SCOPE==============

    /*
    * 사용자 이메일 조회
    */
    public function scopeUserId($query, $userId){
        return $query->where('email', $userId);
    }
}
