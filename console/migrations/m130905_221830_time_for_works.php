<?php

class m130905_221830_time_for_works extends CDbMigration
{
	public function up()
	{
        $this->addColumn('pfWorks', 'createTime', 'int');
	}

	public function down()
	{
        $this->dropColumn('pfWorks', 'createTime');
	}

}