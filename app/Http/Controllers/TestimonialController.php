<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

class TestimonialController extends BaseController
{
    public function index() {
        return view('dashboard.testimonials');
    }
    
}