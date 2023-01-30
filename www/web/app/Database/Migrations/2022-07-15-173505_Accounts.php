<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Accounts extends Migration
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
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
            ],
            'status'       => [
                # 2 = permanent, 1 = temporary, 0 = free
                'type'              => 'INT',
                'constraint'        => '1',
                'default'           => '0',
                'null'              => false,
            ],
            'block'       => [
                'type'              => 'INT',
                'constraint'        => '1',
                'null'              => false,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => false,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'reference_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('reference_id');
        $this->forge->addForeignKey(fieldName: 'reference_id', tableName: 'registrations', tableField: 'id', onUpdate: 'CASCADE', onDelete: 'CASCADE');
        $this->forge->createTable('accounts');
    }

    public function down()
    {
        $this->forge->dropTable('accounts');
    }
}
