<?php

class tqConfiguration extends sfApplicationConfiguration
{
  public function configure()
  {
  }
  
  public function install()
  {
    // modify the site record itself
    $site = Doctrine_Query::create()->from('sfSympalSite')->fetchOne();
    $site->title = 'thatsquality.com';
    $site->description = 'symfony, php &amp; linux chatter by <a href="http://www.twitter.com/weaverryan">Ryan Weaver</a>';
    $site->page_title = 'thatsquality | symfony, php & linux chatter by Ryan Weaver';
    $site->save();
    
    // mod the blog install fixtures
    $blogList = Doctrine_Core::getTable('sfSympalContent')->findOneBySlug('blogpost');
    $blogList->custom_path = '/blog';
    $blogList->page_title = 'symfony, php & linux blog posts';
    $blogList->save();
    
    $blogList->ContentType->default_path = '/blog/:slug';
    $blogList->ContentType->save();
  }
}
