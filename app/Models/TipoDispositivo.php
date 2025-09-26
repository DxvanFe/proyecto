<?php

namespace App\Models;

// app/Models/TipoDispositivo.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDispositivo extends Model
{
    use HasFactory;

    protected $table = 'tipo_dispositivo';
    protected $primaryKey = 'id_tipo_dispositivo';
    public $timestamps = false;

    protected $fillable = [
        'tipo_dispositivo',
    ];
}