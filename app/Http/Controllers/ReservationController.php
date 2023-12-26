<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationsRequest;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Reservation;


class ReservationController extends BaseController
{
    public function index() {
        $daftarReservasi = new Reservation;
        $reservasi = $daftarReservasi->dataReservations();

        return view('dashboard.reservations.daftarReservasi', ['reservations' => $reservasi ]);
    }


    public function create() {
        $daftarReservasi = new Reservation;
        $reservasi = $daftarReservasi->dataReservations();

        return view('dashboard.reservations.tambahReservasi', ['reservations' => $reservasi ]);

    }

    public function store(StoreReservationsRequest $request) {
        $validate = $request->validated();

        $reservation = new Reservation;
        $reservation->name = $request->namaPelanggan;
        $reservation->email = $request->email;
        $reservation->no_hp = $request->noHp;
        $reservation->reservation_date = $request->tanggalJam;
        $reservation->party_size = $request->jumlahOrang;
        $reservation->table_number = $request->nomorMeja;
        $reservation->save();

        return redirect('reservations')->with('msg','Berhasil menambahkan Reservasi');
    }
}