<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;

    protected $table = 'historial';
    protected $primaryKey = 'id_historial';
    public $timestamps = false;

    protected $fillable = [
        'tipo_dispositivo',
        'serial',
        'descripcion',
        'fecha',
    ];

    /**
     * Un registro del historial pertenece a un dispositivo.
     */
    public function dispositivo()
    {
        return $this->belongsTo(Dispositivo::class, 'serial', 'serial');
    }
}