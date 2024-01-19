<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $fillable = ['name','no_hp','reservation_date','reservation_time','party_size','tables_id','pesan','status'] ;
    
    protected $casts = [
      'status' => 'string',
    ];
  
    public function getStatusAttribute($value)
    {
       return ucfirst($value);
    }

    public function tables() {
        return $this->belongsTo(Table::class);
    }

    
}