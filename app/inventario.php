<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    //
    protected $fillable=['id_libro','nombre','descripcion','npagina','edicion','autor','precio'];
}
