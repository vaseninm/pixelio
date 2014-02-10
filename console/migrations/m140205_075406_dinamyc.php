<?php

class m140205_075406_dinamyc extends CDbMigration
{
	public function up()
	{
		$this->renameTable('vars', 'phrases');

		$this->createTable('dynamicPhrases', array(
				'id' => 'pk',
				'phrase_id' => 'int',
				'value' => 'text',
			));

		$this->createIndex('dynamic_phrases', 'dynamicPhrases', 'phrase_id');
	}

	public function down()
	{
		$this->renameTable('phrases', 'vars');
		$this->dropIndex('dynamic_phrases', 'dynamicPhrases');
		$this->dropTable('dynamicPhrases');
	}

}