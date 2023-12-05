<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class TableController extends BaseController
{
    public function index() {
        $daftarMeja = DB::table('tables')->get();
        return view('dashboard.daftarMeja', ['tables' => $daftarMeja]);
    }
}
