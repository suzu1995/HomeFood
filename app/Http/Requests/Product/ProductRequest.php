<?php

namespace App\Http\Requests\Product;

use App\Models\MProduct;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * 権限フィルター
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 商品登録時のバリデーションルール
     *
     * @return array
     */
    public function rules()
    {

        return [
            'product_name' => 'required|string|max:50',
            'product_price' => 'required|numeric|max:100000',
            'product_gazou' => 'nullable|file|image|max:1024',
        ];
    }

    /**
     * バリデーションメッセージを返す
     *
     * @return array
     */
    public function messages() {
        return [
        "required" => "必須項目です",
        "product_name.string" => "商品名は文字で入力してください",
        "product_name.max" => "商品名は50文字まで入力可能です",
        "product_price.max" => "価格は30文字まで入力可能です",
        "numeric" => "数字のみ使用可能です",
        "product_gazou.image" => "写真ファイルを選択して下さい",
        "product_gazou.max" => "画像サイズが1Mを超えています",
        ];
      }
}
