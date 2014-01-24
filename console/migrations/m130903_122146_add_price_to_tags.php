<?php

class m130903_122146_add_price_to_tags extends CDbMigration
{
	public function up()
	{
        $this->addColumn('pfTags', 'price', 'int');
	}

	public function down()
	{
        $this->dropColumn('pfTags', 'price');
	}

}