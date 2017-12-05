<?php

/**
 * \AppserverIo\Psr\Deployment\DescriptorWrapperTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/deployment
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Deployment;

/**
 * Test implementation for the descriptor wrapper.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/deployment
 * @link      http://www.appserver.io
 */
class DescriptorWrapperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The descriptor wrapper we want to test.
     *
     * @var \AppserverIo\Psr\Deployment\DescriptorWrapper
     */
    protected $descriptorWrapper;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     * @see \PHPUnit_Framework_TestCase::setUp()
     */
    protected function setUp()
    {
        $this->descriptorWrapper = new DescriptorWrapper();
    }

    /**
     * Test set setter/getter for the name.
     *
     * @return void
     */
    public function testSetGetName()
    {

        // create a stub for the descriptor interface
        $stub = $this->getMock('\AppserverIo\Psr\Deployment\DescriptorInterface');

        // configure the stub
        $stub->expects($this->once())
             ->method('getName')
             ->willReturn($name = 'Test Name');

        // inject the stub
        $this->descriptorWrapper->injectDescriptor($stub);

        // test the getter
        $this->assertSame($name, $this->descriptorWrapper->getName());
    }

    /**
     * Test set setter/getter for the description.
     *
     * @return void
     */
    public function testSetGetDescription()
    {

        // create a stub for the descriptor interface
        $stub = $this->getMock('\AppserverIo\Psr\Deployment\DescriptorInterface');

        // configure the stub
        $stub->expects($this->once())
             ->method('getDescription')
             ->willReturn($description = 'Test Description');

        // inject the stub
        $this->descriptorWrapper->injectDescriptor($stub);

        // test the getter
        $this->assertSame($description, $this->descriptorWrapper->getDescription());
    }
}
