<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVenuesTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'venue' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('venues');
    }

    public function down()
    {
        $this->forge->dropTable('venues');
    }
}

