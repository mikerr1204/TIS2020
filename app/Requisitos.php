<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisitos extends Model
{
    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class);
    }
}
