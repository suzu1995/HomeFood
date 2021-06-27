<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMember extends Model
{
    use HasFactory;

    //テーブル指定
    protected $table = 'm_member';

    //主キーを設定
    protected $primaryKey = 'member_id';

    public $incrementing = true;

    const CREATED_AT = null;
    const UPDATED_AT = null;
}
