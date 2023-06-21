<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateConfirmTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'student_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'course_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'hall_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'script_num' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('student_id', 'students', 'id');
        $this->forge->addForeignKey('course_id', 'courses', 'id');
        $this->forge->addForeignKey('hall_id', 'halls', 'id');
        $this->forge->createTable('confirm');
    }

    public function down()
    {
        $this->forge->dropTable('confirm');
    }
}
