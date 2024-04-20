<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculasModel extends Model
{
    protected $table = 'peliculas';//tabla de la db
    protected $primarykey = 'id';

    #campos que pueden ser insertados, modificados o eliminados
    protected $allowedFields=['titulo','descripcion'];


}