<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MStaff extends Model
{
    use HasFactory;

    //テーブル指定
    protected $table = 'm_staff';

    //主キーを設定
    protected $primaryKey = 'staff_id';

    protected $fillable = ['staff_name', 'staff_password'];

    public $incrementing = true;

    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * スタッフのidと名前を取得する
     *
     * @return array
     */
    public static function getStaffList() {
    return MStaff::select(['staff_id', 'staff_name'])->get()->toArray();
    }

    /**
     * スタッフのidと名前を登録する
     *
     * @return void
     */
    public static function saveStaff($data){

        $staff_name = $data['staff_name'];
        $staff_password = $data['staff_password'];
        MStaff::create([
            'staff_name' => $staff_name,
            'staff_password' => $staff_password,
        ]);
    }
}
