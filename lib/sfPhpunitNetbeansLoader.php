<?php

include_once dirname(__FILE__).'/bootstrap.php';

/**
 *
 * @package    sfPhpunitNetBeansPlugin
 * @subpackage lib
 * 
 * @author     Maksim Kotlyar <mkotlar@ukr.net>
 */
class sfPhpunitNetbeansLoader implements PHPUnit_Runner_TestSuiteLoader
{
  public function __construct($path = null)
  {
    $this->_path = substr( $_SERVER['argv'][7],4 );
  }

  public function load($suiteClassName, $suiteClassFile = '')
  {
    sfPhpunitNetbeansSuite::$path = $this->_path;

    return new ReflectionClass('sfPhpunitNetbeansSuite');
  }

  public function  reload(ReflectionClass $aClass)
  {
    
  }
}