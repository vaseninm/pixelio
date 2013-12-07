<?php

class m131203_200619_remorm_visits extends CDbMigration
{
	public function up()
	{
        $this->dropTable('clients');
        $this->createTable('visits', array(
            'id' => 'pk',
            'ip' => 'string',
            'time' => 'datetime',
            'referrerUrl' => 'string',
            'referrerKey' => 'string',
        ));
        $this->createTable('messages', array(
            'id' => 'pk',
            'visit_id' => 'int',
            'name' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'message' => 'text',
            'comfortTime' => 'string',
        ));
        $this->addForeignKey('visits_messages', 'messages', 'visit_id', 'visits', 'id', 'CASCADE');
    }

	public function down()
	{
        $this->dropTable('messages');
        $this->dropTable('visits');
        $this->createTable('clients', array(
            'id' => 'pk',
            'ip' => 'string',
            'visits' => 'int',
            'name' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'message' => 'text',
            'comfortTime' => 'string',
            'lastVisit' => 'int',
            'firstVisit' => 'int',
            'referrerUrl' => 'string',
            'referrerKey' => 'string',
        ));
    }
}