<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    protected $table = 'reservations';

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

}

