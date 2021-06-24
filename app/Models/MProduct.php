<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MProduct extends Model
{
    use HasFactory;
    //テーブル指定
    protected $table = 'm_priduct';

    //主キーを設定
    protected $primaryKey = 'product_id';

    public $timestamps = false;
}
