<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserSubmenuCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'inputMenu1'     => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'inputSubmenuTitle'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'inputSubmenuURL'         => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'icon'        => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('inputMenu1', 'user_menu', 'id', 'CASCADE', 'CASCADE');
		
        $this->forge->createTable('user_submenu_category');
    }

    public function down()
    {
        $this->forge->dropTable('user_submenu_category');
    }
}
