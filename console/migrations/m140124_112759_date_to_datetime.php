<?php

class m140124_112759_date_to_datetime extends CDbMigration
{
	public function up()
	{
		$this->alterColumn('domains', 'create_time', 'datetime');
		$this->alterColumn('domains', 'update_time', 'datetime');
	}

	public function down()
	{
		$this->alterColumn('domains', 'create_time', 'date');
		$this->alterColumn('domains', 'update_time', 'date');
	}

}