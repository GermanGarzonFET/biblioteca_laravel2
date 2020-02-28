<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    //
    protected $fillable=['id_libro','nombre','descripcion','genero','autor','url_img','precio'];
}
