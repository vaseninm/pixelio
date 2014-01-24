<?php

class m130903_123922_create_feedback extends CDbMigration
{
	public function up()
	{
        $this->createTable('feedback', array(
            'id' => 'pk',
            'title' => 'string',
            'text' => 'text',
            'author' => 'string',
            'approve' => 'int',
        ));
	}

	public function down()
	{
        $this->dropTable('feedback');
	}
}