<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Staff extends Migration
{
   public function up()
   {
      $this->forge->addField([
         'id' => ['type' => 'int', 'unsigned' => true, 'auto_increment' => true],
         'boss' => ['type' => 'int', 'unsigned' => true, 'default' => 0],
         'name' => ['type' => 'varchar', 'constraint' => 150, 'unique' => true, 'null' => false],
         'password' => ['type' => 'varchar', 'constraint' => 100, 'null' => false],
         'firstLogin' => ['type' => 'char', 'constraint' => 1, 'default' => 1],
      ]);

      $this->forge->addPrimaryKey('id');
      $this->forge->createTable('staff');
   }

   public function down()
   {
      $this->forge->dropTable('users');
   }
}
