<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationsRequest;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index() {
        $tables = DB::table('tables')->where('is_available', 'available')
        ->get();
        $testimoni = DB::table('testimonials')->get();

        return view('landingpage.home',['tables' => $tables,'testimoni'=> $testimoni ]);
    }

    public function store(StoreReservationsRequest $request) {
        
        $reservation = new Reservation();
        $reservation->name = $request->namaPelanggan;
        $reservation->no_hp = $request->noHp;
        $reservation->reservation_date = $request->tanggalJam;
        $reservation->reservation_time = $request->jam;
        $reservation->party_size = $request->jumlahOrang;
        $reservation->tables_id = $request->nomorMeja;
        $reservation->pesan = $request->catatan;
        $reservation->save();
        return redirect('hasil');
    }
}