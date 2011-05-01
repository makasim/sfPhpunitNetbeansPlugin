
#sfPhpunitNetBeansPlugin

## Overview

The plugin allows you easily run tests directly in NetBeans IDE with pretty formatted output like:

![NetBeans test output](https://lh5.googleusercontent.com/_CglT1aSZJ0E/Tb1VA2fQWmI/AAAAAAAAAEk/RxC-oRRHtYw/s800/Screenshot.png)

## Requirements

* [Symfony](http://www.symfony-project.org) 1.1 - 1.4

## Installation

### Download:
#### Git dev: 

    git clone https://github.com/makasim/sfPhpunitNetbeansPlugin.git

### Enable it

    class ProjectConfiguration extends sfProjectConfiguration
    {
      public function setup()
      {
        $this->enablePlugins('sfPhpunitNetBeansPlugin');
      }
    }

## Getting Started

The plugin generates phpunit.xml which you can find under the path:

    %SF_ROOT_DIR%/plugins/sfPhpunitNetBeansPlugin/data/phpunit.xml

than you should configure NetBeans to use this phpunit.xml file 

The example for NetBeans 7.0:

![NetBeans phpunit configuration](https://lh4.googleusercontent.com/_CglT1aSZJ0E/Tb1VaVLpTrI/AAAAAAAAAEs/5EZcoNgRs8E/s800/Screenshot-1.png)

You are done with it now you can start playing with just select a test file and click SHIFT+F6 to run tests.