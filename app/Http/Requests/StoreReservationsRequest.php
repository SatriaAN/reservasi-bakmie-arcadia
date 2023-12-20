<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationsRequest extends FormRequest
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
            'namaPelanggan' => 'required',
            'tanggalJam' => 'required',
            'jumlahOrang' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nomorMeja.unique' => ':attribute sudah Terdaftar',
            'nomorMeja.required' => ':attribute tidak Boleh Kosong',
            'kapasitasMeja.required' => ':attribute tidak boleh kosong',
            'kapasitasMeja.max:6' => ':attribute maksimal 6',
            'statusMeja.required' => ':attribute belum dipilih'
        ];
    }


    public function attributes(): array
    {
        return [
            'nomorMeja' => 'Nomor Meja',
            'kapasitasMeja' => 'Kapasitas Meja',
            'statusMeja' => 'Status meja'
        ];
    }
}