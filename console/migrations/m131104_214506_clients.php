<?php

class m131104_214506_clients extends CDbMigration
{
	public function up()
	{
        $this->createTable('clients', array(
            'id' => 'pk',
            'ip' => 'string',
            'visits' => 'int',
            'name' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'message' => 'text',
            'comfortTime' => 'string',
            'lastVisit' => 'int',
            'firstVisit' => 'int',
        ));
	}

	public function down()
	{
		$this->dropTable('clients');
	}

}