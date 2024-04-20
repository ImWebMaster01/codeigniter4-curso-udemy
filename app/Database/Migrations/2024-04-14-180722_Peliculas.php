<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peliculas extends Migration
{
    public function up()
    {
        #definimos campos o columnas de la tabla Peliculas
        $this->forge->addField(
            [
            'id'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'titulo'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
            ],
            'descripcion'=>[
                'type'=>'TEXT',
                'null'=>TRUE,//campo opcional
            ]
        ]);

        #asignamos la llave primaria a la tabla
        $this->forge->addkey('id',TRUE);
        #creamos la tabla
        $this->forge->createTable('peliculas');
    }

    public function down()
    {
        //borrar tabla
        $this->forge->dropTable('peliculas');
    }
}
