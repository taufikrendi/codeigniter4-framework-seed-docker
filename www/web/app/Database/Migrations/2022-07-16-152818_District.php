<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class District extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => false,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('district');
    }

    public function down()
    {
        $this->forge->dropTable('district');
    }
}
