<?php

class SympalContentSlotDropRenderFunction extends Doctrine_Migration_Base
{
  public function up()
  {
    $this->removeColumn('sf_sympal_content_slot', 'render_function');
  }

  public function down()
  {
    $this->addColumn('sf_sympal_content_slot', 'render_function', 'string', array(
      'length' => 255,
    ));
  }
}
