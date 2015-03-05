<?php

/**
 * \AppserverIo\Psr\HttpMessage\ResponseInterface
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
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/http-message
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\HttpMessage;

/**
 * A HTTP response message.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/http-message
 * @link      http://www.appserver.io
 * @see      http://tools.ietf.org/html/rfc2616#section-6
 *
 * The comments below hint at methods present in widely used explicit implementations of this interface and MAY
 * be introduced in the next MAJOR release of this PSR
 *
 * @method null                                              addCookie()             addCookie(\AppserverIo\Psr\HttpMessage\CookieInterface $cookie) Adds the passed cookie to this request
 * @method null                                              addHeader()             addHeader(string $name, string $value) Adds a header information got from connection
 * @method integer                                           appendBodyStream()      appendBodyStream(string $content) Appends body stream with content
 * @method integer                                           copyBodyStream()        copyBodyStream(resource $sourceStream, integer $maxlength = null, integer $offset = null) Copies a source stream to body stream
 * @method string                                            getBodyContent()        getBodyContent() Return content
 * @method resource                                          getBodyStream()         getBodyStream() Returns the body stream as a resource
 * @method integer                                           getContentLength()      getContentLength() Returns current content length
 * @method \AppserverIo\Psr\HttpMessage\CookieInterface|null getCookie()             getCookie(string $name) Get cookie by given name
 * @method array                                             getCookies()            getCookies() Just returns the array of cookie objects
 * @method array                                             getDefaultHeaders()     getDefaultHeaders() Returns default headers array
 * @method string|null                                       getHeader()             getHeader(string $name) Returns header by given name
 * @method array                                             getHeaders()            getHeaders() Returns all headers as array
 * @method string                                            getHeaderString()       getHeaderString() Returns all headers as string
 * @method integer                                           getState()              getState() Returns the current state
 * @method string                                            getStatusLine()         getStatusLine() Returns http response status line
 * @method string                                            getVersion()            getVersion() Returns protocol version
 * @method boolean                                           hasCookie()             hasCookie(string $name) Check if request has specific cookie
 * @method boolean                                           hasHeader()             hasHeader(string $name) Checks if header exists by given name
 * @method boolean                                           hasState()              hasState(integer $state) Compares current state with given state
 * @method null                                              init()                  init() Initialises the request object to default properties
 * @method null                                              prepareHeaders()        prepareHeaders() Prepares the headers for dispatch
 * @method null                                              redirect()              redirect(string $url, integer $code = 301) Redirects to the passed URL by adding a 'Location' header and setting the appropriate status code, by default 301
 * @method null                                              removeCookie()          removeCookie(string $name) Removes the cookie with the passed name
 * @method null                                              removeHeader()          removeHeader(string $name) Removes the header with the passed name
 * @method null                                              resetBodyStream()       resetBodyStream() Reset the body stream
 * @method null                                              setBodyStream()         setBodyStream(resource $bodyStream) Resets the stream resource pointing to body content
 * @method null                                              setCookies()            setCookies(array $cookies) Resets the whole cookies array by another array collection of cookie instances
 * @method null                                              setDefaultHeaders()     setDefaultHeaders(array $headers) Sets the default response headers to response
 * @method null                                              setHeaders()            setHeaders(array $headers) Set headers data
 * @method null                                              setQueryString()        setQueryString(string $queryString) Sets query string
 * @method null                                              setState()              setState(integer $state) Sets state of response
 * @method null                                              setStatus()             setStatus(string $status) Splits status message into status code and reason phrase and sets it
 * @method null                                              setStatusCode()         setStatusCode(integer $code) Sets the http response status code
 * @method null                                              setStatusReasonPhrase() setStatusReasonPhrase(string $statusReasonPhrase) Sets the status reason phrase
 * @method null                                              setVersion()            setVersion($version) Set protocol version
 */
interface ResponseInterface extends MessageInterface
{

    /**
     * Gets the response Status-Code, a 3-digit integer result code of the
     * server's attempt to understand and satisfy the request.
     *
     * @return integer Status code.
     */
    public function getStatusCode();

    /**
     * Gets the response Reason-Phrase, a short textual description of the
     * Status-Code.
     *
     * Because a Reason-Phrase is not a required element in response
     * Status-Line, the Reason-Phrase value MAY be null. Implementations MAY
     * choose to return the default RFC 2616 recommended reason phrase for the
     * response's Status-Code.
     *
     * @return string|null Reason phrase, or null if unknown.
     */
    public function getStatusReasonPhrase();
}
