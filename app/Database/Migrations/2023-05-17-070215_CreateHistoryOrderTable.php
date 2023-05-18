<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHistoryOrderTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'id_user' => ['type' => 'INT'],
            'id_order' => ['type' => 'VARCHAR', 'constraint' => 500],
            'createdDate' => ['type' => 'DATETIME', 'CURRENT_TIMESTAMP' => true],
            'updatedDate' => ['type' => 'DATETIME', 'CURRENT_TIMESTAMP' => true],
        ]);
        $this->forge->addForeignKey('id_user', 'user', 'id');
        $this->forge->createTable('history_order');
    }

    public function down()
    {
        $this->forge->dropTable('history_order');
    }
}
