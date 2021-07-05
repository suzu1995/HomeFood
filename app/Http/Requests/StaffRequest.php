<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'staff_password' => 'required|alpha_num|max:12|min:6',
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
        ];
      }
}
