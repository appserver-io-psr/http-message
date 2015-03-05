<?php

/**
 * \AppserverIo\Psr\HttpMessage\RequestInterface
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
 * A HTTP request message.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/http-message
 * @link      http://www.appserver.io
 * @see      http://tools.ietf.org/html/rfc2616#section-5
 *
 * The comments below hint at methods present in widely used explicit implementations of this interface and MAY
 * be introduced in the next MAJOR release of this PSR
 *
 * @method null                                              addCookie()        addCookie(\AppserverIo\Psr\HttpMessage\CookieInterface $cookie) Adds the passed cookie to this request
 * @method null                                              addHeader()        addHeader(string $name, string $value) Adds a header information got from connection
 * @method null                                              addPart()          addPart(\AppserverIo\Http\HttpPart $part, string $name = null) Adds a part to the parts collection
 * @method integer                                           appendBodyStream() appendBodyStream(string $content) Appends body stream with content
 * @method integer                                           copyBodyStream()   copyBodyStream(resource $sourceStream, integer $maxlength = null, integer $offset = null) Copies a source stream to body stream
 * @method string                                            getBodyContent()   getBodyContent() Return content
 * @method resource                                          getBodyStream()    getBodyStream() Returns the body stream as a resource
 * @method \AppserverIo\Psr\HttpMessage\CookieInterface|null getCookie()        getCookie(string $name) Get cookie by given name
 * @method array                                             getCookies()       getCookies() Just returns the array of cookie objects
 * @method string|null                                       getHeader()        getHeader(string $name) Returns header by given name
 * @method array                                             getHeaders()       getHeaders() Returns all headers as array
 * @method string|null                                       getParam()         getParam(string $param) Returns a param value by given key
 * @method array                                             getParams()        getParams() Returns the array of all params
 * @method \AppserverIo\Psr\HttpMessage\PartInterface        getPart()          getPart(string $name) Returns a part object by given name
 * @method array                                             getParts()         getParts() Returns the parts collection as array
 * @method string                                            getQueryString()   getQueryString() Returns query string
 * @method string                                            getVersion()       getVersion() Returns protocol version
 * @method boolean                                           hasCookie()        hasCookie(string $name) Check if request has specific cookie
 * @method boolean                                           hasHeader()        hasHeader(string $name) Checks if header exists by given name
 * @method boolean                                           hasParam()         hasParam(string $param) Queries whether the request contains a parameter or not
 * @method null                                              init()             init() Initialises the request object to default properties
 * @method null                                              setBodyStream()    setBodyStream(resource $bodyStream) Resets the stream resource pointing to body content
 * @method null                                              setCookies()       setCookies(array $cookies) Resets the whole cookies array by another array collection of cookie instances
 * @method null                                              setHeaders()       setHeaders(array $headers) Set headers data
 * @method null                                              setParam()         setParam(string $param, string $value) Sets a parameter given in query string
 * @method array                                             setParams()        setParams(array $params) Sets the array of all params
 * @method null                                              setQueryString()   setQueryString(string $queryString) Sets query string
 * @method null                                              setVersion()       setVersion($version) Set protocol version
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
