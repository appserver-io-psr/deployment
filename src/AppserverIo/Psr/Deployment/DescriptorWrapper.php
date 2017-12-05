<?php

/**
 * \AppserverIo\Psr\Deployment\DescriptorWrapper
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
 * Wrapper implementation for the descriptor interface.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/deployment
 * @link      http://www.appserver.io
 */
class DescriptorWrapper implements DescriptorInterface
{

    /**
     * The descriptor instance we want to wrap.
     *
     * @var \AppserverIo\Psr\Deployment\DescriptorInterface
     */
    protected $descriptor;

    /**
     * Injects the descriptor instance we want to wrap.
     *
     * @param \AppserverIo\Psr\Deployment\DescriptorInterface $descriptor The descriptor instance to be wrapped
     *
     * @return void
     */
    public function injectDescriptor(DescriptorInterface $descriptor)
    {
        $this->descriptor = $descriptor;
    }

    /**
     * Returns the wrapped descriptor instance.
     *
     * @return \AppserverIo\Psr\Deployment\DeploymentInterface The wrapped descriptor instance
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }

    /**
     * Returns the reference description.
     *
     * @return string The reference description
     */
    public function getDescription()
    {
        return $this->getDescriptor()->getDescription();
    }
}
