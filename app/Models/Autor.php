<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autors';
    protected $primaryKey = 'codigo';
    public $incrementing = false;
}
