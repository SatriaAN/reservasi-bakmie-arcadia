<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class TestimonialController extends BaseController
{
    public function index() {
        $testimoni = DB::table('testimonials')->get();
        return view('dashboard.testimonials', ['testimonials' => $testimoni]);
    }

}
