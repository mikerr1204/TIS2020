<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntaje extends Model
{
    protected $table = 'puntajes';

    protected $fillable = [
        'descripcion', 'valor'
    ];

    public function merito()
    {
        return $this->belongsTo(Merito::class);
    }
}
