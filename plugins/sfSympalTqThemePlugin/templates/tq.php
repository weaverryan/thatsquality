<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <?php $sympal_content = tq_get_content_for_layout() ?>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <?php sympal_minify() ?>
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
</head>
<body>
  <div id="header">
    <div class="container_12">
      <div class="alpha grid_5">
        <h1>
          &lt;<?php echo link_to($sf_sympal_context->getSite()->getTitle(), '@sympal_homepage') ?>/&gt;
        </h1>
        <h2><?php echo $sf_sympal_context->getSite()->getDescription(ESC_RAW) ?></h2>
      </div>
      
      <div class="prefix_1 grid_6 omega">
        <div id="nav">
          <span class="id_sel">#nav</span> <span class="brace">{</span>
          <?php $menu = get_sympal_menu('primary') ?>
          <?php echo $menu ?>
          <span class="brace">}</span>
        </div>
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  
  <div id="content" class="container_12">
    <div class="alpha grid_9" id="bd">
      <?php echo $sf_content ?>
    </div>
    
    <div class="grid_3 omega" id="sd">      
      <div class="section">
        <h3>About the Author</h3>
        <?php echo get_sympal_content_slot($sympal_content, 'sidebar_headshot', 'Text') ?>
        <?php echo get_sympal_content_slot($sympal_content, 'sidebar_about', 'Markdown') ?>
        <div class="clear">&nbsp;</div>
      </div>
      
      <?php if (has_slot('sympal_right_sidebar')): ?>
        <?php echo get_slot('sympal_right_sidebar') ?>
      <?php endif; ?>
    </div>
    <div class="clear">&nbsp;</div>
  </div>
  
  <div id="footer"></div>
</body>
</html>