<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfsympalcontentcomment extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_sympal_content_comment', array(
             'content_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             'comment_id' => 
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
              1 => 'comment_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('sf_sympal_content_comment');
    }
}