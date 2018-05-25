<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    protected $fillable=['Nombre', 'Direccion', 'Telefono', 'Edad'];
}
