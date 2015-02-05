<?php

/**
 * AppserverIo\Psr\Deployment\DeploymentWrapper
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
 * Wrapper implementation for the deployment interface.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/deployment
 * @link      http://www.appserver.io
 */
class DeploymentWrapper implements DeploymentInterface
{

    /**
     * The deployment instance we want to wrap.
     *
     * @var \AppserverIo\Psr\Deployment\DeploymentInterface
     */
    protected $deployment;

    /**
     * Injects the deployment instance we want to wrap.
     *
     * @param \AppserverIo\Psr\Deployment\DeploymentInterface $deployment The deployment instance to be wrapped
     *
     * @return void
     */
    public function injectDeployment(DeploymentInterface $deployment)
    {
        $this->deployment = $deployment;
    }

    /**
     * Returns the wrapped deployment instance.
     *
     * @return \AppserverIo\Psr\Deployment\DeploymentInterface The wrapped deployment instance
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    /**
     * Initializes the available applications and adds them to the container.
     *
     * @return void
     */
    public function deploy()
    {
        $this->getDeployment()->deploy();
    }
}
