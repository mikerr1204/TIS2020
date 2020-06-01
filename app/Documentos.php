<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    public $table = 'documentos';
    public $timestamps = true;

    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class);
    }
}
