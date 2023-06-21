<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'index_num' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'programme_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'level_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'semester_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'session_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('programme_id', 'programmes', 'id');
        $this->forge->addForeignKey('session_id', 'session', 'id');
        $this->forge->addForeignKey('level_id', 'level', 'id');
        $this->forge->addForeignKey('semester_id', 'semester', 'id');
        $this->forge->createTable('students');
    }

    public function down()
    {
        $this->forge->dropTable('students');
    }
}

