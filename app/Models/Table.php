<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $table = 'tables';
    protected $primaryKey = 'id';
    protected $fillable= ['id','table_number','capacity','is_available'];

    public $timestamps = false;

    public function reservasi() {
        return $this->hasMany(Reservation::class, 'table_id');
    }
    
}