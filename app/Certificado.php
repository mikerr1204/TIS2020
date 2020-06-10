<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $fillable = [
        'name', 'file'
    ];

    public function merito()
    {
        return $this->belongsTo(Merito::class);
    }
    public function postulation()
    {
        return $this->belongsTo(Postulation::class);
    }
}
