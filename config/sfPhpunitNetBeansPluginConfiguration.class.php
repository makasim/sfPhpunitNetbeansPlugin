<?php

class sfPhpunitNetBeansPluginConfiguration extends sfPluginConfiguration
{
  public function initialize()
  {
    $pluginRootDir = realpath(dirname(__FILE__).'/..');    
    $phpunitXml = $pluginRootDir.'/data/phpunit.xml';
    if (!file_exists($phpunitXml)) {
      $template = file_get_contents($pluginRootDir.'/data/phpunit.tpl.xml');
      $template = str_replace('%%plugin-root-dir%%', $pluginRootDir, $template);

      file_put_contents($phpunitXml, $template);
    }
  }
}