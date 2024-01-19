<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationsRequest extends FormRequest
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
            'noHp' => 'required',
            'tanggalJam' => 'required|after:today',
            'jam' => 'required',
            'jumlahOrang' => 'required',
            'nomorMeja' => 'required',
            'status' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'namaPelanggan.required' => ':attribute tidak Boleh Kosong',
            'noHp.max:14' => ':attribute maksimal 14',
            'noHp.required' => ':attribute tidak boleh kosong',
            'tanggalJam.required' => ':attribute belum dipilih',
            'tanggalJam.after' => ':attribute tidak bisa hari sebelumnya',
            'jam.required' => ':attribute belum dipilih',
            'jam.date_format:H:i' => ':attribute Harus sesuai dengan waktu buka restoran Bakmie Arcadia',
            'jumlahOrang.required' => ':attribute tidak boleh kosong',
            'nomorMeja.required' => ':attribute belum dipilih',
            'catatan.max:150' => ':attribute melebihi maksimum karakter',
            'status.required' => 'Status tidak boleh kosong',
        ];
    }


    public function attributes(): array
    {
        return [
            'namaPelanggan' => 'Nama',
            'noHp' => 'Nomor Handphone',
            'tanggalJam' => 'Tanggal',
            'jam' => 'Jam',
            'jumlahOrang' => 'Jumlah orang',
            'nomorMeja' => 'Nomor Meja',
            'catatan' => 'Catatan',
        ];
    }
}