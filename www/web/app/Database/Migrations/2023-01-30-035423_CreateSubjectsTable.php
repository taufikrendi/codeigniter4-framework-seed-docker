<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubjectsTable extends Migration
{
    public function up() {
       $this->forge->addField([
         'id' => [
            'type' => 'varchar',
            'constraint' => 36,
            'null' => false,
            'unique' => true,
         ],
         'name' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
         ],
         'description' => [
            'type' => 'TEXT',
            'null' => true,
         ],
         'created_at' => [
            'type' => 'datetime',
            'null' => true,
         ],
         'updated_at' => [
            'type' => 'datetime',
            'null' => true,
         ],
         'deleted_at' => [
            'type' => 'datetime',
            'null' => true,
         ],
       ]);
       $this->forge->addKey('id', true);
       $this->forge->createTable('subjects');
    }

    //--------------------------------------------------------------------

    public function down() {
       $this->forge->dropTable('subjects');
    }
}
