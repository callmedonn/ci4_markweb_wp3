<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'id_user' => ['type' => 'INT'],
            'id_template' => ['type' => 'VARCHAR', 'constraint' => 500],
            'image' => ['type' => 'VARCHAR', 'constraint' => 255],
            'status' => ['type' => 'VARCHAR', 'constraint' => 255],
            'no_order' => ['type' => 'VARCHAR', 'constraint' => 255],
            'createdDate' => ['type' => 'DATETIME', 'CURRENT_TIMESTAMP' => true],
            'updatedDate' => ['type' => 'DATETIME', 'CURRENT_TIMESTAMP' => true],
        ]);
        $this->forge->addForeignKey('id_user', 'user', 'id');
        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}
