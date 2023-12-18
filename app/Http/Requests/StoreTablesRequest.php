<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTablesRequest extends FormRequest
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
            'nomorMeja' => 'required|numeric|unique:tables,table_number',
            'kapasitasMeja' => 'required|numeric|max:6',
            'statusMeja' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nomorMeja.unique' => ':attribute Nomor Meja Sudah Terdaftar',
            'nomorMeja.required' => ':attribute Nomor Meja Tidak Boleh Kosong',
            'kapasitas.required' => ':attribute Kapsitas tidak boleh kosong',
        ];
    }
}