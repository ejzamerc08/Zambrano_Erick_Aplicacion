<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    use HasFactory;

    protected $table = 'ejemplars';
    protected $primaryKey = 'codigo';
    public $incrementing = false;

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_codigo', 'codigo'); 
    }
}
