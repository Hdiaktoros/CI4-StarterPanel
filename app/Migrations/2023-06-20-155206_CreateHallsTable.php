<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHallsTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'exam_room' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'venue_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('venue_id', 'venues', 'id');
        $this->forge->createTable('halls');
    }

    public function down()
    {
        $this->forge->dropTable('halls');
    }
}
