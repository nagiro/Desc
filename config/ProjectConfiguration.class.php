<?php

require_once 'C:\\Users\\nagiro\\Desktop\\repository\\trunk\\lib\\symfony\\1.4.1\\lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
  }
}
