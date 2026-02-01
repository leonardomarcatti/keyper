<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keys extends Migration
{
    public function up()
    {
      $this->forge->addField([
         'id' => ['type' => 'int', 'unsigned' => true, 'auto_increment' => true],
         'label' => ['type' => 'varchar', 'constraint' => 50, 'null' => false],
      ]);

      $this->forge->addPrimaryKey('id');
      $this->forge->createTable('keys');
    }

    public function down()
    {
      $this->forge->dropTable('keys');
    }
}
