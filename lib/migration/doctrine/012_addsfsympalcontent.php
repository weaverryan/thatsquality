<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfsympalcontent extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_sympal_content', array(
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
             'content_type_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'last_updated_by_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'created_by_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'date_published' => 
             array(
              'type' => 'timestamp',
              'length' => 25,
             ),
             'custom_path' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'theme' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'template' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'module' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'action' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'publicly_editable' => 
             array(
              'type' => 'boolean',
              'default' => 0,
              'length' => 25,
             ),
             'page_title' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'meta_keywords' => 
             array(
              'type' => 'string',
              'length' => 500,
             ),
             'meta_description' => 
             array(
              'type' => 'string',
              'length' => 500,
             ),
             'i18n_slug' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
              'date_published' => 
              array(
              'fields' => 
              array(
               0 => 'date_published',
              ),
              ),
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('sf_sympal_content');
    }
}