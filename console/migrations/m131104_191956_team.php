<?php

class m131104_191956_team extends CDbMigration
{
	public function up()
	{
        $this->createTable('team', array(
            'id' => 'pk',
            'fullname' => 'string',
            'position' => 'string',
            'about' => 'text',
            'sort' => 'int',
        ));
	}

	public function down()
	{
		$this->dropTable('team');
	}

}