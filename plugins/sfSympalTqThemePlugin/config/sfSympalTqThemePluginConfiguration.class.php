<?php

class sfSympalTqThemePluginConfiguration extends sfPluginConfiguration
{
  public function initialize()
  {
    $this->dispatcher->connect('context.load_factories', array($this, 'bootstrap'));
  }
  
  /**
   * Listens to context.load_factories and bootstraps this plugin
   */
  public function bootstrap(sfEvent $event)
  {
    $context = $event->getSubject();
    $context->getConfiguration()->loadHelpers(array(
      'TqTheme',
    ));
  }
}