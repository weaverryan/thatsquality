<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfsympalredirect extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_sympal_redirect', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'site_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'source' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'destination' => 
             array(
              'type' => 'string',
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
        $this->dropTable('sf_sympal_redirect');
    }
}