<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MProduct extends Model
{
    use HasFactory;
    //テーブル指定
    protected $table = 'm_product';

    //主キーを設定
    protected $primaryKey = 'product_id';

    public $incrementing = true;

    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * スタッフのidと名前を取得する
     *
     * @return array
     */
    public static function getProductList() {
        return Mproduct::select(['product_id', 'product_name','product_price'])->get()->toArray();
        }
}
