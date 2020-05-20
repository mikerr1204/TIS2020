<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $table = 'convocatorias';
    protected $primaryKey = 'idConvocatoria';
    public $timestamps = false;
}
