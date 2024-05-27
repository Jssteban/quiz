<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidenteModel extends Model
{
    use HasFactory;

    protected $table = 'accidentes';
    protected $guarded = [];


    public function persona(){
        return $this->belongsTo('App\Models\PersonaModel');
    }
}
