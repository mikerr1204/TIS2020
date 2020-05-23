<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    public function inscripciones()
    {
        return $this->hasMany(Inscripcione::class);
    }
}
