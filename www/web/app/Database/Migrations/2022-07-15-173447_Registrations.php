<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Registrations extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
            ],
            'email_validation'      => [
                # 1 = true, 0 = false
                'type'              => 'INT',
                'constraint'        => '1',
                'default'           => '0',
                'null'              => true,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => false,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('registrations');
    }

    public function down()
    {
        $this->forge->dropTable('registrations');
    }
}
