<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTemplatesTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'title' => ['type' => 'VARCHAR', 'constraint' => 255],
            'description' => ['type' => 'TEXT'],
            'price' => ['type' => 'DECIMAL', 'constraint' => '10'],
            'image' => ['type' => 'VARCHAR', 'constraint' => 255],
            'link_download' => ['type' => 'VARCHAR', 'constraint' => 255],
            'stacks' => ['type' => 'VARCHAR', 'constraint' => 255],
            'createdDate' => ['type' => 'DATETIME', 'CURRENT_TIMESTAMP' => true],
            'updatedDate' => ['type' => 'DATETIME', 'CURRENT_TIMESTAMP' => true],
        ]);
        $this->forge->createTable('templates');
    }

    public function down()
    {
        $this->forge->dropTable('templates');
    }
}
