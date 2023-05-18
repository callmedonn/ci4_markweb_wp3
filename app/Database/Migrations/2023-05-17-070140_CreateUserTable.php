<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'username' => ['type' => 'VARCHAR', 'constraint' => 255],
            'fullname' => ['type' => 'VARCHAR', 'constraint' => 255],
            'email' => ['type' => 'VARCHAR', 'constraint' => 255],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'role' => ['type' => 'VARCHAR', 'constraint' => 50],
            'tipe' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'createdDate' => ['type' => 'DATETIME', 'CURRENT_TIMESTAMP' => true],
            'updatedDate' => ['type' => 'DATETIME', 'CURRENT_TIMESTAMP' => true],
        ]);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
