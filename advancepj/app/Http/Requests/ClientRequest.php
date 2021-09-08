<?php

namespace App\Http\Requests;

use App\Rules\ZipCodeRule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *
     *
     */
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'first-name' => 'required',
            'last-name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' =>
            ['required', new ZipCodeRule()],
            'address' => 'required',
            'opinion' => 'required|max:120',
        ];
    }
    public function messages()
    {
        return [
            'first-name.required' => '名を入力してください',
            'last-name.required' => '姓を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required'=> '郵便番号を入力してください',
            'postcode.required' => '半角英数字8字(ハイフン含め)で入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max' => '120文字以下で入力してください',
        ];
    }
}
