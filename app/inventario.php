<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    //
    protected $fillable=['id_libro','nombre','descripcion','genero','autor','url_img','precio'];
}
