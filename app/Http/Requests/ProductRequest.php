<?php

namespace App\Http\Requests;

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
     * スタッフ登録時のバリデーションルール
     *
     * @return array
     */
    public function rules()
    {

        return [
            'product_name' => 'required|string|max:50',
            'product_price' => 'required|num|max:30',
            'product_gazou' => 'mimes:jpg,bmp,png',
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
        "product_name.max" => "商品名は25文字まで入力可能です",
        "num" => "数字のみ使用可能です",
        "product_gazou.mimes" => "写真ファイルを選択して下さい",
        ];
      }
}
