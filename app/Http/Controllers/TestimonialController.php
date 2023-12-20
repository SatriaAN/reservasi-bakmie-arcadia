<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialsRequest;
use App\Http\Requests\UpdateTestimonialsRequest;
use App\Models\Testimonials;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class TestimonialController extends BaseController
{
    public function index() {
        $testimoni = DB::table('testimonials')->get();
        return view('dashboard.testimonials.testimonials', ['testimonials' => $testimoni]);
    }

    public function create() {
        return view('dashboard.testimonials.tambahTestimonials');
    }

    public function store(StoreTestimonialsRequest $request) {
        $validate = $request->validated();

        $testimonials = new Testimonials;
        $testimonials->nama = $request->namaTestimoni;
        $testimonials->profesi = $request->profesiTestimoni;
        $testimonials->testimoni = $request->testimonials;
        $testimonials->save();

        return redirect('testimonials')->with('msg','Berhasil menambahkan Testimoni');
    }

    public function show(Testimonials $testimoni, $id) {
        $data = $testimoni->find($id);
        return view('dashboard.testimonials.editTestimonials')->with([
            'idTestimoni' => $data->id,
            'namaTestimoni' => $data->nama,
            'profesiTestimoni' => $data->profesi,
            'testimonials' => $data->testimoni
        ]);
    }

    public function update(UpdateTestimonialsRequest $request, Testimonials $testimoni, $id) {
        $data = $testimoni->find($id);
        $data->nama = $request->namaTestimoni;
        $data->profesi = $request->profesiTestimoni;
        $data->testimoni = $request->testimonials;
        $data->save();

        return redirect('testimonials')->with('msg','Data testimoni '. $data->nama .' berhasil diubah');
    }

    public function destroy(Testimonials $testimoni, $id) {
        $data = $testimoni->find($id);
        $data->delete();

        return redirect('testimonials')->with('msg','Data testimoni '. $data->nama .' berhasil dihapus');
    }
}