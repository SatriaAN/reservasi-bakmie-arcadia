<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonialsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'namaTestimoni' => 'required',
            'profesiTestimoni' => 'required',
            'testimonials' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'namaTestimoni.required' => ':attribute tidak boleh kosong',
            'profesiTestimoni.required' => ':attribute tidak boleh kosong',
            'testimonials.required' => ':attribute tidak boleh kosong',
            
        ];
    }


    public function attributes(): array
    {
        return [
            'namaTestimoni' => 'Nama',
            'profesiTestimoni' => 'Profesi',
            'testimonials' => 'Testimoni '
        ];
    }

}