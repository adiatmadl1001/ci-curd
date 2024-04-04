<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employees extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'role'      => [
                'type'           => 'ENUM',
                'constraint'     => ['Developer', 'Project Manager', 'Designer']
            ],
            'address'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
        ]);
 
        $this->forge->addKey('id', TRUE);
 
        $this->forge->createTable('employees', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('employees');
    }
}
