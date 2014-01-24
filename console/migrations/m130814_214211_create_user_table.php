<?php

class m130814_214211_create_user_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('users', array(
            'id' => 'pk',
            'username' => 'VARCHAR(64)',
            'email' => 'VARCHAR(256)',
            'password' => 'VARCHAR(256)',
            'role' => 'VARCHAR(20)',
            'createTime' => 'INT',
        ), 'ENGINE=InnoDB');
        $this->insert('users', array(
            'username' => 'vaseninm',
            'email' => 'vaseninm@gmail.com',
            'password' => CPasswordHelper::hashPassword('admin'),
            'role' => 'administrator',
            'createTime' => time(),
        ));
	}

	public function down()
	{
        $this->dropTable('users');
	}
}