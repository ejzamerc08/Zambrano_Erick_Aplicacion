<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo';
    public $incrementing = false;

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_codigo', 'codigo'); 
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class, 'editorial_id', 'id'); 
    }
}
