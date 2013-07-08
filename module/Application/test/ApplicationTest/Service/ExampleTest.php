<?php

namespace Application\Service;

use PHPUnit_Framework_TestCase as TestCase;
use Application\Service\Example;

class ExampleTest extends TestCase
{

    protected $_example;

    public function setup()
    {
        $serviceManager   = \ApplicationTest\Bootstrap::getServiceManager();
        $this->_example = $serviceManager->get('Application\Service\Example');
    }

    public function testHellowWorld()
    {
        $this->assertEquals($this->_example->helloWorld(), "Hello World");
    }

}