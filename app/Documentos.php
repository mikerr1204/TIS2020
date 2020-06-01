<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class);
    }
}
