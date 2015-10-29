<?php
/**
 * OAuth 2.0 user authentication failed event
 *
 * @package     league/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Event;

use League\Event\AbstractEvent;
use \Phalcon\Http\Request;

class UserAuthenticationFailedEvent extends AbstractEvent
{
    /**
     * Request
     * @var \Phalcon\Http\Request
     */
    private $request;

    /**
     * Init the event with a request
     * @param \Phalcon\Http\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * The name of the event
     *
     * @return string
     */
    public function getName()
    {
        return 'error.auth.user';
    }

    /**
     * Return request
     * @return \Phalcon\Http\Request
     */
    public function getRequest()
    {
        return $this->request;
    }
}
