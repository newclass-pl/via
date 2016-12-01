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


namespace Test\Via;


use Via\Action\HTTPRequest;

/**
 * Class HTTPRequestTest
 * @package Test\Via
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
class HTTPRequestTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testSetterGetter(){
        $request=new HTTPRequest('url','get');

        $this->assertEquals('url',$request->getUrl());
        $this->assertEquals('GET',$request->getMethod());
    }
}