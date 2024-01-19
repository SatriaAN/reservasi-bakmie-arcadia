<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationsRequest;
use App\Http\Requests\UpdateReservationsRequest;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Support\Facades\DB;

class ReservationController extends BaseController
{
    public function index() {
        $reservasi = Reservation::with('tables')->get();
        return view('dashboard.reservations.daftarReservasi', ['reservations' => $reservasi ]);
    }


    public function create() {
        $tables = DB::table('tables')->where('is_available', 'available')
            ->get();
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
        $tables = DB::table('tables')->where('is_available', 'available')
        ->get();
        $data = $reservation->find($id);
        return view('dashboard.reservations.editReservasi',compact('tables'))->with([
            'idReservasi' => $data->id,
            'namaPelanggan' => $data->name,
            'noHp' => $data->no_hp,
            'tanggalJam' => $data->reservation_date,
            'jam' => $data->reservation_time,
            'jumlahOrang' => $data->party_size,
            'nomorMeja' => $data->tables_id,
            'status' => $data->status,
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
        $data->status = $request->status;
        $data->pesan = $request->catatan;
        $data->save();

        return redirect('daftar-reservasi')->with('msg','Data Reservasi '. $data->name .' berhasil diubah');
    }

    public function accept($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'disetujui';
        $reservation->save();

        return redirect('daftar-reservasi')->with('msg','Data Reservasi '. $reservation->name .' berhasil diubah');
    }

    public function reject($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'ditolak';
        $reservation->save();

        return redirect('daftar-reservasi')->with('msg','Data Reservasi '. $reservation->name .' berhasil diubah');
    }
    

    public function destroy(Reservation $reservation, $id) {
        $data = $reservation->find($id);
        $data->delete();

        return redirect('daftar-reservasi')->with('msg','Data reservasi '. $data->name .' berhasil dihapus');
    }
}