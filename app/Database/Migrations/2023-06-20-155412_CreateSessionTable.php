<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSessionTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'sessions' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('session');
    }

    public function down()
    {
        $this->forge->dropTable('session');
    }
}
