<?php

namespace App\Models;

// app/Models/Accion.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    use HasFactory;

    protected $table = 'accion';
    protected $primaryKey = 'id_accion';
    public $timestamps = false;

    protected $fillable = [
        'nombre_accion',
    ];
}