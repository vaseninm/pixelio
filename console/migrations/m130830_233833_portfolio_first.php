<?php

class m130830_233833_portfolio_first extends CDbMigration
{
	public function up()
	{
        $this->createTable('pfWorks', array(
            'id' => 'pk',
            'title' => 'string',
            'desc' => 'text',
            'status' => 'int',
            'order' => 'int',
            'face_id' => 'int',
        ));
        $this->createTable('pfPages', array(
            'id' => 'pk',
            'title' => 'string',
            'type' => 'int',
            'work_id' => 'int',
            'order' => 'int',
        ));
        $this->addForeignKey('pfPageWorks', 'pfPages', 'work_id', 'pfWorks', 'id', 'CASCADE');
	}

	public function down()
	{
        $this->dropTable('pfPages');
        $this->dropTable('pfWorks');
	}

}