<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    // Laravel asume 'dispositivos' como nombre de tabla, así que no es necesario especificarlo.
    // Tampoco es necesario especificar la primary key porque es 'id'.
    // Esta tabla sí tiene timestamps, así que lo dejamos por defecto (true).

    protected $fillable = [
        'tipo_dispositivo',
        'serial',
        'modelo',
        'departamento',
        'ubicacion',
    ];

    // --- RELACIONES ---

    public function tipoDispositivoRelacion()
    {
        return $this->belongsTo(TipoDispositivo::class, 'tipo_dispositivo', 'tipo_dispositivo');
    }

    public function modeloRelacion()
    {
        return $this->belongsTo(Modelo::class, 'modelo', 'nombre_modelo');
    }

    public function departamentoRelacion()
    {
        return $this->belongsTo(Departamento::class, 'departamento', 'nombre_departamento');
    }

    public function ubicacionRelacion()
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion', 'nombre_ubicación');
    }
}