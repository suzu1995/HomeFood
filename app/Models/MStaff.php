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

    public $timestamps = false;

    /**
     * モデルの属性のデフォルト値
     *
     * @var array
     */
    // protected $attributes = [
    //     'delayed' => false,
    // ];
}
