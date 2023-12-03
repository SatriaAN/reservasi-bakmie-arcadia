<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

class TableController extends BaseController
{
    public function index() {
        return view('dashboard.daftarMeja');
    }
}