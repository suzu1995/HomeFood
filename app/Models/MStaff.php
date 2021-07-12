<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

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
        Hash::make($staff_password);
        MStaff::create([
            'staff_name' => $staff_name,
            'staff_password' => $staff_password,
        ]);
    }

    /**
     * スタッフのidと名前を更新する
     *
     * @return void
     */
    public static function updateStaff($data, $id){

        if(is_null($data['staff_password'])){
            $staff_name = $data['staff_name'];
            MStaff::where('staff_id',$id)->update([
                'staff_name' => $staff_name,
            ]);
        }else{
            $staff_name = $data['staff_name'];
            $staff_password = $data['staff_password'];
            $staff_password = password_hash( $staff_password, PASSWORD_DEFAULT);
            MStaff::where('staff_id',$id)->update([
                'staff_name' => $staff_name,
                'staff_password' => $staff_password,
            ]);
        }
    }

    /**
     * スタッフのidと名前を取得する
     *
     * @return array
     */
    public static function getStaff($id) {
        $staff = MStaff::find($id)->toArray();
        return $staff;
    }
}
