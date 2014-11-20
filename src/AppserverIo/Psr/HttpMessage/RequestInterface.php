<?php

/**
 * AppserverIo\Psr\HttpMessage\RequestInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage HttpMessage
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io/http-message
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Psr\HttpMessage;

/**
 * A HTTP request message.
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage HttpMessage
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io/http-message
 * @link       http://www.appserver.io
 * @link       http://tools.ietf.org/html/rfc2616#section-5
 */
interface RequestInterface extends MessageInterface
{

    /**
     * Gets the HTTP method of the request.
     *
     * @return string Returns the request method.
     */
    public function getMethod();

    /**
     * Sets the method to be performed on the resource identified by the
     * Request-URI.
     *
     * While HTTP method names are typically all uppercase characters, HTTP
     * method names are case-sensitive and thus implementations SHOULD NOT
     * modify the given string.
     *
     * @param string $method Case-insensitive method.
     *
     * @return void
     */
    public function setMethod($method);

    /**
     * Sets requested URI.
     *
     * @param string $uri The requested uri to set
     *
     * @return void
     */
    public function setUri($uri);

    /**
     * Returns requested URI.
     *
     * @return string
     */
    public function getUri();
}
