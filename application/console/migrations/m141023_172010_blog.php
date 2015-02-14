<?php

class m141023_172010_blog extends CDbMigration
{
	public function safeUp()
	{
        $this->createTable('blog_posts', array(
            'id' => 'pk',
            'title' => 'string',
            'small' => 'text',
            'full' => 'text',
            'author' => 'int',
            'create_date' => 'int',
        ));

        $this->createTable('blog_comments', array(
            'id' => 'pk',
            'text' => 'text',
            'author' => 'string',
            'create_date' => 'int',
            'post_id' => 'int',
        ));

        $this->addForeignKey('fk_blog_posts_comments', 'blog_comments', 'post_id', 'blog_posts', 'id');
	}

	public function down()
	{
		echo "m141023_172010_blog does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}