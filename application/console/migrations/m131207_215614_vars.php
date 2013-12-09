<?php

class m131207_215614_vars extends CDbMigration
{
	public function up()
	{
        $this->createTable('vars', array(
            'id' => 'pk',
            'name' => 'string',
            'value' => 'text',
            'type' => 'tinyint',
        ));
	}

	public function down()
	{
		$this->dropTable('vars');
	}

}