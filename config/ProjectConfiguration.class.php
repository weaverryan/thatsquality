<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin', 'sfSympalPlugin');
    require_once(dirname(__FILE__).'/../plugins/sfSympalPlugin/config/sfSympalPluginConfiguration.class.php');
    sfSympalPluginConfiguration::enableSympalPlugins($this);
  }
  
  /**
   * Connect to any plugin tests
   */
  public function loadPlugins()
  {
    parent::loadPlugins();
    
    $this->pluginConfigurations['sfSympalTagsPlugin']->connectTests();
  }
}
