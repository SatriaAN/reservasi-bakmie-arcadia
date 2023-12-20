<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTablesRequest;
use App\Http\Requests\UpdateTablesRequest;
use App\Models\Table;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class TableController extends BaseController
{
    public function index() {
        $daftarMeja = DB::table('tables')->get();
        return view('dashboard.tables.daftarMeja', ['tables' => $daftarMeja]);
    }

    public function create() {
        return view('dashboard.tables.tambahMeja');
    }

    public function store(StoreTablesRequest $request) {
        $validate = $request->validated();

        $daftarMeja = new Table;
        $daftarMeja->table_number = $request->nomorMeja;
        $daftarMeja->capacity = $request->kapasitasMeja;
        $daftarMeja->is_available = $request->statusMeja;
        $daftarMeja->save();

        return redirect('daftar-meja')->with('msg','Berhasil menambahkan meja');
    }

    public function show(Table $table, $id) {
        $data = $table->find($id);
        return view('dashboard.tables.editMeja')->with([
            'idMeja' => $data->id,
            'nomorMeja' => $data->table_number,
            'kapasitasMeja' => $data->capacity,
            'statusMeja' => $data->is_available
        ]);
    }

    public function update(UpdateTablesRequest $request, Table $table,$id) {

        $data = $table->find($id);
        $data->table_number = $request->nomorMeja;
        $data->capacity = $request->kapasitasMeja;
        $data->is_available = $request->statusMeja;
        $data->save();

        return redirect('daftar-meja')->with('msg','Data meja '. $data->table_number .' berhasil diubah');

    }

    public function destroy(Table $table, $id) {
        $data = $table->find($id);
        $data->delete();

        return redirect('daftar-meja')->with('msg','Data meja '. $data->table_number .' berhasil dihapus');
    }
}