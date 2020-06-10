<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merito extends Model
{
    protected $fillable = [
        'tipo', 'clase', 'detalle', 'puntaje', 'importancia'
    ];
    
    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class);
    }

    public function certificados()
    {
        return $this->hasMany(Certificado::class);
    }
}
