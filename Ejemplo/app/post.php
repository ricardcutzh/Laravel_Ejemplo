<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

    protected $table = 'posts';//ESPECIFICAR A QUE TABLA DE LA MIGRACION ME REFIERO

    protected $fillable = ['title','description','url'];//ATRIBUTOS QUE SE PUEDEN LLENAR EN LA TABLA CREADA

    //EXISTE TAMBIEN UN ATRIBUTO GUARDED ESPECIFICA LAS COLUMNAS QUE NO NOS INTERESA QUE SEAN LLENADA
}


 ?>
