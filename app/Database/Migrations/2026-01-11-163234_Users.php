<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
      $this->forge->addField(['id' => ['type' => 'int', 'unsigned' => true, 'auto_increment' => true],
      'name' => ['type' => 'varchar', 'constraint' => 150, 'unique' => true, 'null' => false],
      'id_cpf' => ['type' => 'int', 'null' => false, 'unsigned' => true, 'unique' => true ],
      ]);

      $this->forge->addPrimaryKey('id');
      $this->forge->addForeignKey('id_cpf', 'cpfs', 'id', '', '', '');
      $this->forge->createTable('users');
    }

    public function down()
    {
         $this->forge->dropTable('users');
    }
}
