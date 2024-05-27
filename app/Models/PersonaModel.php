<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaModel extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $guarded = [];

    public function accidentes(){
        return $this->hasMany('App\Models\AccidenteModel');
    }
    public function carros(){
        return $this->belongsToMany(CarrosModel::class, 'carro_persona', 'persona_id', 'carros_id');
    }
}
