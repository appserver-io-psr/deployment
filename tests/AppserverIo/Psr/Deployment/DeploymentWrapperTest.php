<?php

/**
 * \AppserverIo\Psr\Deployment\DeploymentWrapperTest
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
 * Test implementation for the deployment wrapper.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/deployment
 * @link      http://www.appserver.io
 */
class DeploymentWrapperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the deploy method will be invoked.
     *
     * @return void
     */
    public function testDeploy()
    {

        // create a stub for the ServletRequest interface
        $stub = $this->getMock('\AppserverIo\Psr\Deployment\DeploymentInterface');

        // configure the stub.
        $stub->expects($this->once())
             ->method('deploy');

        // create a new wrapper instance
        $wrapper = new DeploymentWrapper();
        $wrapper->injectDeployment($stub);
        $wrapper->deploy();
    }
}
