<?php

/**
 * \AppserverIo\Psr\HttpMessage\ProtocolTest
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
 * @link      https://github.com/appserver-io/http-message
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\HttpMessage;

/**
 * Test implementation for the HTTP protocol implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/http-message
 * @link      http://www.appserver.io
 * @see      http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html
 */
class ProtocolTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Tests the static method that resolves the appropriate message for the passed status code.
     *
     * @return void
     */
    public function testGetStatusReasonPhraseByCode()
    {
        $this->assertSame(Protocol::STATUS_REASONPHRASE_200, Protocol::getStatusReasonPhraseByCode(200));
    }
}
