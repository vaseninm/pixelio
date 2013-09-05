<?php

class m130905_183051_update_tags_and_feedback extends CDbMigration
{
	public function up()
	{
        $this->addColumn('pfTags', 'desc', 'text');
        $this->dropColumn('feedback', 'title');
	}

	public function down()
	{
        $this->dropColumn('pfTags', 'desc');
        $this->addColumn('feedback', 'title', 'string');
	}
}