<?php

class m140105_191647_delete_domains_from_visits_and_messages extends CDbMigration
{
	public function up()
	{
        $this->dropIndex('messages_domain', 'messages');
        $this->dropColumn('messages', 'domain_id');

        $this->dropIndex('visits_domain', 'visits');
        $this->dropColumn('visits', 'domain_id');
    }

	public function down()
	{
        $this->addColumn('visits', 'domain_id', 'int');
        $this->createIndex('visits_domain', 'visits', 'domain_id');

        $this->addColumn('messages', 'domain_id', 'int');
        $this->createIndex('messages_domain', 'messages', 'domain_id');
	}
}