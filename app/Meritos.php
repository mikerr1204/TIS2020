<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meritos extends Model
{
    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class);
    }
}
