<?php

class m130902_165531_portfolio_tags extends CDbMigration
{
	public function up()
	{
        $this->createTable('pfTags', array(
            'id' => 'pk',
            'title' => 'string',
        ));
        $this->createTable('pfTagWorkRelation', array(
            'tag_id' => 'int',
            'work_id' => 'int',
        ));
        $this->addForeignKey('pfTagWorks', 'pfTagWorkRelation', 'work_id', 'pfWorks', 'id', 'CASCADE');
        $this->addForeignKey('pfWorkTag', 'pfTagWorkRelation', 'tag_id', 'pfTags', 'id', 'CASCADE');
    }

	public function down()
	{
        $this->dropTable('pfTags');
        $this->dropTable('pfTagWorkRelation');
	}

}