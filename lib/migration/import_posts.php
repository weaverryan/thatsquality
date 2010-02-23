<?php
require_once(dirname(__FILE__).'/../../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('tq', 'dev', true);
sfContext::createInstance($configuration);

$manager = Doctrine_Manager::getInstance();
$manager->setCurrentConnection('legacy');

$query = 'SELECT a.* FROM wf_blog_post a';
$blogs = $manager->getConnection('legacy')->execute($query, array(0));
$manager->setCurrentConnection('doctrine');

// clear out any existing
$existing = Doctrine_Core::getTable('sfSympalBlogPost')->createQuery()->execute();
foreach($existing as $blog)
{
  $blog->Content->MenuItem->delete();
  $blog->Content->delete();
  $blog->delete();
}

$admin = Doctrine_Core::getTable('sfGuardUser')->createQuery()->fetchOne();
$blogMenu = Doctrine_Core::getTable('sfSympalMenuItem')->findOneBySlug('blog');

foreach($blogs->fetchAll() as $blog)
{
  echo sprintf('Adding blog post id "%s", title "%s"'."\n", $blog['id'], $blog['title']);
  
  $content = sfSympalContent::createNew('sfSympalBlogPost');
  $content->CreatedBy = $admin;
  $content->page_title = $blog['title'];
  $content->slug = $blog['slug'];
  $content->Site = sfSympalContext::getInstance()->getSite();
  $content->created_at = $blog['created_at'];
  $content->updated_at = $blog['created_at'];
  $content->date_published = $blog['published_at'].' 00:00:00';
  
  $content->sfSympalBlogPost->title = $blog['title'];
  $content->sfSympalBlogPost->teaser = $blog['extract'];
  
  $content->MenuItem->name = $blog['title'];
  $content->MenuItem->Site = sfSympalContext::getInstance()->getSite();
  $content->MenuItem->slug = $blog['slug'];
  $content->MenuItem->date_published = $blog['published_at'].' 12:0'.rand(0, 9).':00';
  
  $content->save();
  $content->MenuItem->getNode()->insertAsLastChildOf($blogMenu);
  
  $slot = $content->getOrCreateSlot('body', 'Markdown');
  $slot->value = $blog['content_raw'];
  $slot->save();
  
  $query = 'SELECT a.* FROM wf_blog_tag a WHERE a.wf_blog_post_id = ?';
  $tags = $manager->getConnection('legacy')->execute($query, array($blog['id']));
  
  $manager->setCurrentConnection('doctrine');
  
  foreach($tags->fetchAll() as $tag)
  {
    $sympalTag = Doctrine_Core::getTable('sfSympalTag')->findOneByName($tag['tag']);
    if (!$sympalTag)
    {
      $sympalTag = new sfSympalTag();
      $sympalTag->name = $tag['tag'];
      $sympalTag->save();
    }
    
    $content->Tags[] = $sympalTag;
    $content->save();
    echo sprintf('    Adding tag "%s"' ."\n", $tag['tag']);
  }
}