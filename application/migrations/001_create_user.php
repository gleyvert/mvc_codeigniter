<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_user extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_usuario' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'nombre_usuario' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'correo' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'contrasena' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'null' => TRUE,
            ),
            'range' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('id_usuario', TRUE);
        $this->dbforge->create_table('usuarios');
    }

    public function down()
    {
        $this->dbforge->drop_table('usuarios');
    }
}
