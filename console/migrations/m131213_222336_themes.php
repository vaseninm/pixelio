<?php

class m131213_222336_themes extends CDbMigration
{
	public function safeUp()
	{
        $this->createTable('themes', array(
            'id' => 'pk',
            'name' => 'string',
            'strong' => 'int',
        ));
        $this->addColumn('clients', 'theme_id', 'int');
        $this->addForeignKey('clients_theme', 'clients', 'theme_id', 'themes', 'id');
	}

	public function safeDown()
	{
        $this->dropForeignKey('clients_theme', 'clients');
        $this->dropTable('themes');
        $this->dropColumn('clients', 'theme_id');
	}
}