<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado'; // Especifica el nombre de la tabla
    protected $primaryKey = 'id_empleado'; // Especifica la llave primaria
    public $timestamps = false; // Indica que no usas created_at/updated_at

    protected $fillable = [
        'nombre_empleado',
        'cargo',
        'tipo_documento',
        'identificacion',
        'departamento',
    ];

    // --- RELACIONES ---

    // Un empleado PERTENECE A un cargo
    public function cargoRelacion()
    {
        // Relación: llave foránea local, llave primaria de la otra tabla
        return $this->belongsTo(Cargo::class, 'cargo', 'nombre_cargo');
    }

    // Un empleado PERTENECE A un departamento
    public function departamentoRelacion()
    {
        return $this->belongsTo(Departamento::class, 'departamento', 'nombre_departamento');
    }
}