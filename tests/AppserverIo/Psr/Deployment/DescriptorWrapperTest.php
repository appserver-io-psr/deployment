<?php

/**
 * AppserverIo\Psr\Deployment\DescriptorWrapperTest
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
     * Test if a new instance will be created.
     *
     * @return void
     */
    public function testNewDescriptorInstance()
    {
        $this->assertInstanceOf('AppserverIo\Psr\Deployment\DescriptorInterface', DescriptorWrapper::newDescriptorInstance());
    }
}
