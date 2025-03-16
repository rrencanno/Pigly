<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'price' => 'required|integer|between:0,10000',
            'seasons' => 'required|array',
            'seasons.*' => 'exists:seasons,id', // 各要素がseasonsテーブルのidに存在するかチェック
            'description' => 'required|string|max:120',
            'image' => 'required|image|mimes:jpeg,png|max:2000000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください。',
            'price.required' => '値段を入力してください。',
            'price.integer' => '数値で入力してください。',
            'price.between' => '0〜10000円以内で入力してください。',
            'seasons.required' => '季節を選択してください。',
            'description.required' => '商品説明を入力してください。',
            'description.max' => '120文字以内で入力してください。',
            'image.required' => '商品画像を登録してください。',
            'image.image' => '商品画像は画像ファイルを選択してください。',
            'image.mimes' => '「.png」または「.jpeg」形式でアップロードしてください。',
        ];
    }
}
