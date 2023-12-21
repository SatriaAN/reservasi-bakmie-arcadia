<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    // protected $fillable = ['name','email','no_hp','reservation_date','party_size','table_number','pesan'] ;

    public function dataReservations() {
        $data = DB::table('tables')
                    ->join('reservations', 'tables.id', '=', 'reservations.tables_id')
                    ->select('tables.table_number','tables.table.id', 'reservations.*')
                    ->get();

        return $data;
    }

    public function dataMeja() {
        $data = DB::table('tables')->get();
        return $data;
    }
}
