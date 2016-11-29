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


use Via\Action;

/**
 * Class HTTPAction
 * @package Via\Action
 */
class HTTPAction implements Action
{
    /**
     * @var string
     */
    private $urlPattern;
    /**
     * @var string
     */
    private $method;

    /**
     * @var string[]
     */
    private $methods=['GET','POST','PUT','DELETE'];

    /**
     * HTTPAction constructor.
     * @param string $urlPattern
     * @param string $method GET,POST,PUT or DELETE
     * @throws InvalidArgumentException
     */
    public function __construct($urlPattern,$method)
    {

        $regPattern='/^'.preg_replace(['/\//','/\./','/{.*?}/',],['\\/','\\.','(.+?)',],$urlPattern).'$/';

        $this->urlPattern = $regPattern;

        $this->method = strtoupper($method);
        if(!in_array($this->method,$this->methods)){
            throw new InvalidArgumentException($this->method,implode(',',$this->methods));
        }
    }

    /**
     * Check compatible input data.
     *
     * @param mixed $data
     * @return bool
     */
    public function support($data)
    {
        return $data instanceof HTTPRequest;
    }

    /**
     * Check matched data to action.
     * @param HTTPRequest $data
     * @return bool
     */
    public function match($data)
    {
        if($data->getMethod()!==$this->method){
            return false;
        }

        return preg_match($this->urlPattern,$data->getUrl())===1;
    }
}