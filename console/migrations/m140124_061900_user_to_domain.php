<?php

class m140124_061900_user_to_domain extends CDbMigration
{
	public function up()
	{        
		$this->addColumn('domains', 'user_id', 'int');
        $this->createIndex('domain_user', 'domains', 'user_id');
	}

	public function down()
	{
		$this->dropIndex('domain_user', 'domains');
		$this->dropColumn('domains', 'user_id');
	}

}