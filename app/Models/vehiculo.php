<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';

    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones'
    ];

    // Obtener todos
    static public function getVehiculos()
    {
        return self::all();
    }

    // Obtener por ID
    static public function getVehiculosById($id)
    {
        return self::find($id);
    }

    // Crear (recibe array, NO Request)
    static public function createVehiculo(array $data)
    {
        return self::create($data);
    }

    // Actualizar (recibe array, NO Request)
    static public function updateVehiculo($id, array $data)
    {
        $vehiculo = self::find($id);
        $vehiculo->update($data);
        return $vehiculo;
    }

    // Eliminar
    static public function deleteVehiculo(Vehiculo $vehiculo)
    {
        return $vehiculo->delete();
    }
}


