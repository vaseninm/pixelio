<?php

class m140114_114605_notified extends CDbMigration
{
	public function up()
	{
		$this->createTable('notice', array(
			'id' => 'pk',
			'type' => 'string',
			'address' => 'string',
			'domain_id' => 'int',
		));
		$this->createIndex('notice_domain', 'notice', 'domain_id');
	}

	public function down()
	{
		$this->dropIndex('notice_domain', 'notice');
		$this->dropTable('notice');
	}
}