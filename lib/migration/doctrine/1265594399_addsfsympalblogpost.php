<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfsympalblogpost extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_sympal_blog_post', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'title' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'teaser' => 
             array(
              'type' => 'clob',
              'length' => NULL,
             ),
             'content_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('sf_sympal_blog_post');
    }
}