<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfsympalmenuitemgroup extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_sympal_menu_item_group', array(
             'menu_item_id' => 
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
              0 => 'menu_item_id',
              1 => 'group_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('sf_sympal_menu_item_group');
    }
}