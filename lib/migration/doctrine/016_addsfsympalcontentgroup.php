<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfsympalcontentgroup extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_sympal_content_group', array(
             'content_id' => 
             array(
              'primary' => true,
              'type' => 'integer',
              'length' => 8,
             ),
             'group_id' => 
             array(
              'primary' => true,
              'type' => 'integer',
              'length' => 8,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'content_id',
              1 => 'group_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('sf_sympal_content_group');
    }
}