<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cpfs extends Migration
{
    public function up()
    {
      $this->forge->addField([
         'id' => ['type' => 'int', 'unsigned' => true, 'auto_increment' => true],
         'number' => ['type' => 'char', 'constraint' => 11, 'null' => false, 'unique' => true],
      ]);

      $this->forge->addPrimaryKey('id');
      $this->forge->createTable('cpfs');
    }

    public function down()
    {
      $this->forge->createTable('cpfs');
    }
}
