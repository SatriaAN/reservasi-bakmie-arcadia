<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationsRequest;
use App\Http\Requests\UpdateReservationsRequest;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Reservation;
use App\Models\Table;

class ReservationController extends BaseController
{
    public function index() {
        $reservasi = Reservation::with('tables')->get();
        return view('dashboard.reservations.daftarReservasi', ['reservations' => $reservasi ]);
    }


    public function create() {
        $tables = Table::all();
        return view('dashboard.reservations.tambahReservasi', compact('tables'));
    }

    public function store(StoreReservationsRequest $request) {
        $validate = $request->validated();

        $reservation = new Reservation;
        $reservation->name = $request->namaPelanggan;
        $reservation->no_hp = $request->noHp;
        $reservation->reservation_date = $request->tanggalJam;
        $reservation->reservation_time = $request->jam;
        $reservation->party_size = $request->jumlahOrang;
        $reservation->tables_id = $request->nomorMeja;
        $reservation->pesan = $request->catatan;
        $reservation->save();
        return redirect('daftar-reservasi')->with('msg','Berhasil menambahkan Reservasi');
    }

    public function show(Reservation $reservation, $id) {
        $tables = Table::all();
        $data = $reservation->find($id);
        return view('dashboard.reservations.editReservasi',compact('tables'))->with([
            'idReservasi' => $data->id,
            'namaPelanggan' => $data->name,
            'noHp' => $data->no_hp,
            'tanggalJam' => $data->reservation_date,
            'jam' => $data->reservation_time,
            'jumlahOrang' => $data->party_size,
            'nomorMeja' => $data->tables_id,
            'catatan' => $data->pesan,
        ]);
    }

    public function update(UpdateReservationsRequest $request, Reservation $reservation,$id) {

        $data = $reservation->find($id);
        $data->name = $request->namaPelanggan;
        $data->no_hp = $request->noHp;
        $data->reservation_date = $request->tanggalJam;
        $data->reservation_time = $request->jam;
        $data->party_size = $request->jumlahOrang;
        $data->tables_id = $request->nomorMeja;
        $data->pesan = $request->catatan;
        $data->save();

        return redirect('daftar-reservasi')->with('msg','Data Reservasi '. $data->name .' berhasil diubah');
    }

    public function destroy(Reservation $reservation, $id) {
        $data = $reservation->find($id);
        $data->delete();

        return redirect('daftar-reservasi')->with('msg','Data reservasi '. $data->name .' berhasil dihapus');
    }
}