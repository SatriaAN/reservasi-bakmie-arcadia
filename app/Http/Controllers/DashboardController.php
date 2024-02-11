<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class DashboardController extends BaseController
{
    public function index() {
        $reservasi = Reservation::with('tables')->get();
        $tables = Table::all();
        return view('dashboard.index',['reservations' => $reservasi ,'tables' => $tables]);
    }

    public function boot()
{
    View::composer('dashboard.layout', function ($view) {
        $users = User::all(); 
        $view->with('users', $users);
    });
}
}