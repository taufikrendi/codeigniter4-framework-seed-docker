<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
            ],
            'fullname'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
            ],
            'ektp'       => [
                'type'           => 'TEXT',
                'null'           => false,
            ],
            'phone'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 18,
                'null'           => false,
            ],
            'address'       => [
                'type'           => 'TEXT',
                'null'           => false,
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
            ],
            'province_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ],
            'district_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ],
            'sub_district_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 36,
                'null'           => false,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey(fieldName: 'reference_id', tableName: 'accounts', tableField: 'reference_id', onUpdate: 'CASCADE', onDelete: 'CASCADE');
        $this->forge->addForeignKey(fieldName: 'province_id', tableName: 'province', tableField: 'id', onUpdate: 'CASCADE', onDelete: 'CASCADE');
        $this->forge->addForeignKey(fieldName: 'district_id', tableName: 'district', tableField: 'id', onUpdate: 'CASCADE', onDelete: 'CASCADE');
        $this->forge->addForeignKey(fieldName: 'sub_district_id', tableName: 'sub_district', tableField: 'id', onUpdate: 'CASCADE', onDelete: 'CASCADE');
        $this->forge->createTable('profile');
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}
