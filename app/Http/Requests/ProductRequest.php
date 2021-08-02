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
            'staff_name' => 'required|string|max:25',
            'staff_password' => (is_null($this->staff_password)) ? 'nullable|alpha_num|max:12|min:6' : 'required|alpha_num|max:12|min:6',
            'staff_password2' =>(is_null($this->staff_password)) ? 'nullable|same:staff_password' : 'required|same:staff_password',
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
        "staff_name.string" => "名前は文字で入力してください",
        "staff_name.max" => "名前は25文字まで入力可能です",
        "alpha_num" => "半角アルファベット数字のみ使用可能です",
        "staff_password.max" => "パスワードは6文字以上12文字以下で入力してください",
        "staff_password.min" => "パスワードは6文字以上12文字以下で入力してください",
        "staff_password2.same" => "パスワードと同じ値を入力してください",
        ];
      }
}
