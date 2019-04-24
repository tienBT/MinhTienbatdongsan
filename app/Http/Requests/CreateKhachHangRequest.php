<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateKhachHangRequest extends FormRequest
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
            "name" => ["required", "string", "min:4", "max:40"],
            "address" => ["required", "string"],
            "address_2" => ["required", "string"],
            "cmnd" => ["required", "string", "min:9", "max:9", "unique:khachhang,cmnd"],
            "birthday" => ["required"],
            "phone" => ["required","numeric", "unique:khachhang,sdt"],
            "email" => ["required", "unique:khachhang,email"],
            "mo_ta" => ["required"]
        ];
    }
}
