<?php

class m140208_123448_client_theme_key_set_null extends CDbMigration
{
	public function up()
	{
		$this->dropForeignKey('clients_theme', 'clients');
		$this->addForeignKey('clients_theme', 'clients', 'theme_id', 'themes', 'id', 'SET NULL');
	}

	public function down()
	{
		$this->dropForeignKey('clients_theme', 'clients');
		$this->addForeignKey('clients_theme', 'clients', 'theme_id', 'themes', 'id');
	}

}