<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Routing\Controller as BaseController;

class HasilController extends BaseController
{
    public function index() {
        $showData = Reservation::latest()->first();
        $tables= Table::all();
        return view('landingpage.hasil-reservasi',compact('showData','tables'));
    }


}