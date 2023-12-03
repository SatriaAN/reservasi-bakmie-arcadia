<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

class ReportController extends BaseController
{
    public function index() {
        return view('dashboard.laporan');
    }
}