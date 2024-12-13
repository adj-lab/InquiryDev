<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //名：入力必須・文字列
            'first_name' => ['required', 'string', 'max:255'],
            //姓：入力必須・文字列
            'last_name' => ['required', 'string', 'max:255'],
            //性別：選択必須
            'gender' => ['required', 'in:male,female,other'],
            //メールアドレス：入力必須・メール形式
            'email' => ['required', 'email', 'max:255'],
            //電話番号：入力必須・入力可能桁数上限5・半角数字
            'tel_first' => ['required', 'regex:/^[0-9]+$/', 'max:5'],
            'tel_second' => ['required', 'regex:/^[0-9]+$/', 'max:5'],
            'tel_third' => ['required', 'regex:/^[0-9]+$/', 'max:5'],
            //住所（建物情報以外）：入力必須・文字列
            'address' => ['required', 'string', 'max:255'],
            //問い合わせ種類：選択必須（デフォルト値選択時もメッセージ表示）
            'inquiry_type' => ['required'],
            //問い合わせ内容：文字数上限120文字
            'detail' => ['required', 'string', 'max:120']
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '名を入力してください',
            'last_name.required' => '姓を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel_first.required' => '電話番号を入力してください',
            'tel_second.required' => '電話番号を入力してください',
            'tel_third.required' => '電話番号を入力してください',
            //0は一桁にカウントされないため別途対策必要
            'tel_first.max' => '電話番号は5桁までの数字で入力してください',
            //0は一桁にカウントされないため別途対策必要
            'tel_second.max' => '電話番号は5桁までの数字で入力してください',
            //0は一桁にカウントされないため別途対策必要
            'tel_third.max' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせの内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください'
        ];
    }
}
