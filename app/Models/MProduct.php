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

    protected $fillable = ['product_name', 'product_price', 'product_gazou'];

    public $incrementing = true;

    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * 商品情報を取得する
     *
     * @return array
     */
    public static function getProductList() {
        return Mproduct::select(['product_id', 'product_name','product_price'])->get()->toArray();
        }

    /**
     * 商品情報を登録する
     *
     * @return void
     */
    public static function saveProduct($data){

        $product_name = $data['product_name'];
        $product_price = $data['product_price'];
        $product_gazou = $data['product_gazou'];
        MProduct::create([
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_gazou' => $product_gazou,
        ]);
    }

    /**
     * 商品情報を取得する
     *
     * @return array
     */
    public static function getproduct($id) {
        $product = MProduct::find($id)->toArray();
        return $product;
    }
}
