<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ReservationController extends BaseController
{
    public function index() {
        $daftarReservasi = DB::table('tables')
                        ->join('reservations', 'tables.id', '=', 'reservations.tables_id')
                        ->get();

        return view('dashboard.reservations.daftarReservasi', ['reservations' => $daftarReservasi]);
    }
}