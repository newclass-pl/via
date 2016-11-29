<?php
/**
 * Via: Router PHP
 * Copyright (c) NewClass (http://newclass.pl)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the file LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) NewClass (http://newclass.pl)
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


namespace Via\Action;


/**
 * Class HTTPRequest
 * @package Via\Action
 */
class HTTPRequest
{

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $method;

    /**
     * HTTPRequest constructor.
     * @param string $url
     * @param string $method
     */
    public function __construct($url, $method)
    {
        $this->url = $url;
        $this->method = strtoupper($method);
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }
}