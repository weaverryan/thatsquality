<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfsympalcontenttag extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_sympal_content_tag', array(
             'content_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             'tag_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'content_id',
              1 => 'tag_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('sf_sympal_content_tag');
    }
}