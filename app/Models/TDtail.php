<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDtail extends Model
{
    use HasFactory;

    //テーブル指定
    protected $table = 't_detail';

    //主キーを設定
    protected $primaryKey = 'detail_id';
}
