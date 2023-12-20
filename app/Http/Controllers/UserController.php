<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class UserController extends BaseController
{
    public function index() {
        $users = DB::table('users')->get();
        return view('dashboard.users.user', ['users' => $users]);
    }
}