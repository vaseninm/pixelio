<?php

class m131219_190900_domains extends CDbMigration
{
	public function safeUp()
	{
        $this->createTable('domains', array(
            'id' => 'pk',
            'domain' => 'string',
            'status' => 'string',
            'create_time' => 'date',
            'update_time' => 'date',
        ));

        $this->addColumn('clients', 'domain_id', 'int');
        $this->createIndex('clients_domain', 'clients', 'domain_id');

        $this->addColumn('feedback', 'domain_id', 'int');
        $this->createIndex('feedback_domain', 'feedback', 'domain_id');

        $this->addColumn('messages', 'domain_id', 'int');
        $this->createIndex('messages_domain', 'messages', 'domain_id');

        $this->addColumn('pfPages', 'domain_id', 'int');
        $this->createIndex('pf_pages_domain', 'pfPages', 'domain_id');

        $this->addColumn('pfTags', 'domain_id', 'int');
        $this->createIndex('pf_tags_domain', 'pfTags', 'domain_id');

        $this->addColumn('pfWorks', 'domain_id', 'int');
        $this->createIndex('pf_works_domain', 'pfWorks', 'domain_id');

        $this->addColumn('simplePortfolio', 'domain_id', 'int');
        $this->createIndex('simple_portfolio_domain', 'simplePortfolio', 'domain_id');

        $this->addColumn('team', 'domain_id', 'int');
        $this->createIndex('team_domain', 'team', 'domain_id');

        $this->addColumn('themes', 'domain_id', 'int');
        $this->createIndex('themes_domain', 'themes', 'domain_id');

        $this->addColumn('users', 'domain_id', 'int');
        $this->createIndex('users_domain', 'users', 'domain_id');

        $this->addColumn('vars', 'domain_id', 'int');
        $this->createIndex('vars_domain', 'vars', 'domain_id');

        $this->addColumn('visits', 'domain_id', 'int');
        $this->createIndex('visits_domain', 'visits', 'domain_id');
	}

	public function safeDown()
	{
        echo('Пути назад нет.');
        die();
	}
}