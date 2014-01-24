<?php

class m131210_210255_add_client extends CDbMigration
{
	public function up()
	{
        $this->dropForeignKey('visits_messages', 'messages');
        $this->dropColumn('messages', 'visit_id');
        $this->dropColumn('visits', 'ip');

        $this->createTable('clients', array(
            'id' => 'pk',
            'ip' => 'string',
            'status' => 'string',
        ));
        $this->addColumn('visits', 'client_id', 'int');
        $this->addColumn('messages', 'client_id', 'int');
        $this->addForeignKey('client_visits', 'visits', 'client_id', 'clients', 'id');
        $this->addForeignKey('client_messages', 'messages', 'client_id', 'clients', 'id');
    }

	public function down()
	{
        $this->dropForeignKey('client_visits', 'visits');
        $this->dropForeignKey('client_messages', 'messages');
        $this->dropColumn('visits', 'client_id');
		$this->dropColumn('messages', 'client_id');
        $this->dropTable('clients');

        $this->addColumn('visits', 'ip', 'string');
        $this->addColumn('messages', 'visit_id', 'int');
        $this->addForeignKey('visits_messages', 'messages', 'visit_id', 'visits', 'id', 'CASCADE');
    }
}