<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgrammesTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'programme_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('programmes');
    }

    public function down()
    {
        $this->forge->dropTable('programmes');
    }
}
