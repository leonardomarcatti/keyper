<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StaffSeeder extends Seeder
{
   public function run()
   {
      $data = ['boss' => 1, 'name' => 'admin', 'password' => \md5('admin'), 'firstLogin' => 1];
      $this->db->table('staff')->insert($data);
   }
}
