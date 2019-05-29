<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $fillable = ['nombre_completo', 'especialidad', 'direccion', 'telefono', 'email', 'cita' ,'hora_id'];

    public function url(){
        return $this->id ? 'doctores.update' : 'doctores.store';
    }

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
