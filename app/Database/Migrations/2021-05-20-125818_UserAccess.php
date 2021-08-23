<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserAccess extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'role_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true
			],
<<<<<<< HEAD
			'menu_category_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true
			],
=======
>>>>>>> master
			'menu_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true
<<<<<<< HEAD
			]
=======
			],
>>>>>>> master

		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user_access');
	}

	public function down()
	{
		$this->forge->dropTable('user_access');
	}
}
