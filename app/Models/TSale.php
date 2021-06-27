<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TSale extends Model
{
    use HasFactory;
    //テーブル指定
    protected $table = 't_sale';

    //主キーを設定
    protected $primaryKey = 'sale_id';
    public $incrementing = true;

    const CREATED_AT = null;
    const UPDATED_AT = null;
}
