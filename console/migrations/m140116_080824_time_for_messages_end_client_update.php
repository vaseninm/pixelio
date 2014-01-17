<?php

class m140116_080824_time_for_messages_end_client_update extends CDbMigration
{
	public function up()
	{
		$this->addColumn('clients', 'update_time', 'datetime');
		$this->addColumn('messages', 'time', 'datetime');
	}

	public function down()
	{
		$this->dropColumn('clients', 'update_time');
		$this->dropColumn('messages', 'time');
	}

}