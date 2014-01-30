<?php

class m140130_111436_vars_domains extends CDbMigration
{
	public function up()
	{
		$this->dropIndex('vars_domain', 'vars');
		$this->dropColumn('vars', 'domain_id');
		$this->addColumn('vars', 'theme_id', 'int');
		$this->createIndex('vars_theme', 'vars', 'theme_id');
	}

	public function down()
	{
		$this->dropIndex('vars_theme', 'vars');
		$this->dropColumn('vars', 'theme_id');
		$this->addColumn('vars', 'domain_id', 'int');
		$this->createIndex('vars_domain', 'vars', 'domain_id');
	}


}