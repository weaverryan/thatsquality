<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfsympalcontentslotref extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_sympal_content_slot_ref', array(
             'content_slot_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             'content_id' => 
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
              0 => 'content_slot_id',
              1 => 'content_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('sf_sympal_content_slot_ref');
    }
}