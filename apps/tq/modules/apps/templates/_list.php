<?php echo get_sympal_breadcrumbs($menuItem) ?>

<h2>Useful Applications</h2>

<ul class="list">
  <?php foreach ($apps as $app): ?>
    <li class="row">
      <h3>
        <a href="<?php echo $app->uri ?>"><?php echo $app ?></a>
      </h3>
      <?php echo $app->description ?>
    </li>
  <?php endforeach; ?>
</ul>