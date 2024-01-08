<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function index() {
        $reservasi = Reservation::with('tables')->get();
        $tables = Table::all();
        return view('dashboard.index',['reservations' => $reservasi ,'tables' => $tables]);
    }
}