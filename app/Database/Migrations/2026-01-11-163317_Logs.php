<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Logs extends Migration
{
    public function up()
    {

      $this->forge->addField([
         'id'                => ['type' => 'int', 'unsigned' => true, 'auto_increment' => true],
         'id_staff'          => ['type' => 'int', 'unsigned' => true, 'null' => false],
         'id_key'            => ['type' => 'int', 'unsigned' => true, 'null' => false],
         'id_user'           => ['type' => 'int', 'unsigned' => true, 'null' => false],
         'date_taken datetime NOT NULL DEFAULT CURRENT_TIMESTAMP',
         'returned'          => ['type' => 'int', 'unsigned' => true, 'null' => false, 'default' => 0],
         'id_staff_returned' => ['type' => 'datetime', 'null' => true, 'default' => null],
         'date_returned'     => ['type' => 'datetime', 'null' => true, 'default' => null],
         'id_cpf'            => ['type' => 'int', 'constraint' => 100, 'unsigned' => true, 'null' => false, 'unique' => true],
      ]);

      $this->forge->addPrimaryKey('id');
      $this->forge->addForeignKey('id_staff', 'staff', 'id', '', '', '');
      $this->forge->addForeignKey('id_key', 'keys', 'id', '', '', '');
      $this->forge->addForeignKey('id_user', 'users', 'id', '', '', '');
      $this->forge->createTable('logs');
    }

    public function down()
    {
      $this->forge->dropTable('logs');
    }
}
