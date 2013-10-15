<?php

class m131015_110248_carousel extends CDbMigration
{
	public function up()
	{
        $this->createTable('pfCarousel', array(
            'id' => 'pk',
            'work_id' => 'int'
        ));
        $this->addForeignKey('pfCarouselWorks', 'pfCarousel', 'work_id', 'pfWorks', 'id', 'CASCADE');
	}

	public function down()
	{
        $this->dropForeignKey('pfCarouselWorks', 'pfCarousel');
        $this->dropTable('pfCarousel');
	}
}