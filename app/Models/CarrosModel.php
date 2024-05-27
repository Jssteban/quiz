<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrosModel extends Model
{
    use HasFactory;
    protected $table = 'carros';
    protected $guarded = [];

    public function personas(){
        return $this->belongsToMany(PersonaModel::class, 'carro_persona', 'carros_id', 'persona_id');
    }
}
