<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfsympalpage extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_sympal_page', array(
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
              'notnull' => true,
              'length' => 255,
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
        $this->dropTable('sf_sympal_page');
    }
}