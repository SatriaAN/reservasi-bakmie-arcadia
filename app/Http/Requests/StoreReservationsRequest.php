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
            'email' => 'required|email',
            'noHp' => 'required',
            'tanggalJam' => 'required',
            'jumlahOrang' => 'required',
            'nomorMeja' => 'required',
            'catatan' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'namaPelanggan.required' => ':attribute tidak Boleh Kosong',
            'email.required' => ':attribute tidak boleh kosong',
            'noHp.max:14' => ':attribute maksimal 14',
            'noHp.required' => ':attribute tidak boleh kosong',
            'tanggalJam.required' => ':attribute belum dipilih',
            'jumlahOrang.required' => ':attribute tidak boleh kosong',
            'nomorMeja.required' => ':attribute belum dipilih',
            'catatan.required' => ':attribute tidak boleh kosong',
            'catatan.max:150' => ':attribute melebihi maksimum karakter',
        ];
    }


    public function attributes(): array
    {
        return [
            'namaPelanggan' => 'Nama',
            'email' => 'Email',
            'noHp' => 'Nomor Handphone',
            'tanggalJam' => 'Tanggal & jam',
            'jumlahOrang' => 'Jumlah orang',
            'nomorMeja' => 'Nomor Meja',
            'catatan' => 'Catatan',
        ];
    }
}
