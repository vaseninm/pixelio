<?php

class m131105_220804_simple_portfolio extends CDbMigration
{
	public function up()
	{
        $this->createTable('simplePortfolio', array(
            'id' => 'pk',
            'title' => 'string',
            'desc' => 'text',
            'url' => 'string',
            'sort' => 'int',
        ));
	}

	public function down()
	{
        $this->dropTable('simplePortfolio');
	}

}