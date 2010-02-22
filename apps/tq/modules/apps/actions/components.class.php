<?php

/**
 * Components class handling any sample "apps"
 * 
 * @package     thatsquality
 * @subpackage  actions
 * @author      Ryan Weaver <ryan@thatsquality.com>
 * @since       2010-02-07
 * @version     svn:$Id$ $Author$
 */
class appsComponents extends sfComponents
{
  public function executeList(sfWebRequest $request)
  {
    $this->apps = Doctrine_Core::getTable('tqApp')->findAll();
  }
}