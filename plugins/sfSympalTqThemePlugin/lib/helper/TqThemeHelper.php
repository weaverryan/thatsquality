<?php

/**
 * Retrurns the current sfSympalContent object. If there is none (if
 * we're not in a sympal route), just find one in the database.
 * 
 * This is to allow us to have a content object with which to create
 * content slots in the layout.
 * 
 * I believe there should be a better solution for these "layout" slots,
 * but that'll come later
 * 
 * @return sfSympalContent
 */
function tq_get_content_for_layout()
{
  $content = sfSympalContext::getInstance()->getCurrentContent();
  
  if (!$content)
  {
    $content = Doctrine_Query::create()->from('sfSympalContent')->fetchOne();
  }
  
  return $content;
}