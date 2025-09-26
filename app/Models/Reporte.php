<?php

namespace App\Models;

// app/Models/Reporte.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $table = 'reporte';
    protected $primaryKey = 'id_reporte';
    public $timestamps = false;

    protected $fillable = [
        'dispositivo',
        'empleado',
        'accion',
        'descripcion',
        'fecha',
    ];

    /**
     * Define las relaciones del reporte.
     */
    public function dispositivoRelacion()
    {
        return $this->belongsTo(Dispositivo::class, 'dispositivo', 'serial');
    }

    public function empleadoRelacion()
    {
        return $this->belongsTo(Empleado::class, 'empleado', 'nombre_empleado');
    }

    public function accionRelacion()
    {
        return $this->belongsTo(Accion::class, 'accion', 'nombre_accion');
    }
}