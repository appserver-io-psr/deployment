<?php

/**
 * \AppserverIo\Psr\Deployment\DeploymentInterface
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
 * Interface for deployment implementations.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/deployment
 * @link      http://www.appserver.io
 *
 * The comments below hint at methods present in widely used explicit implementations of this interface and MAY
 * be introduced in the next MAJOR release of this PSR
 *
 * @method \AppserverIo\Appserver\Core\Interfaces\ContainerInterface getContainer()         getContainer() Returns the container instance
 * @method \AppserverIo\Appserver\Core\Api\DeploymentService         getDeploymentService() getDeploymentService() Returns the deployment service instance
 * @method null                                                      injectContainer()      injectContainer(\AppserverIo\Appserver\Core\Interfaces\ContainerInterface $container) Injects the container instance
 */
interface DeploymentInterface
{

    /**
     * Initializes the available applications and adds them to the container.
     *
     * @return void
     */
    public function deploy();
}
