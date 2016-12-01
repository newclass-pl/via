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


use Via\Action\HTTPAction;
use Via\Action\HTTPRequest;
use Via\Action\InvalidArgumentException;

/**
 * Class HTTPActionTest
 * @package Test\Via
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
class HTTPActionTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testConstructor(){

        $methods=['get','post','put','delete'];
        $exception=null;
        foreach($methods as $method){
            try{
                new HTTPAction('/user/{1}.html',$method);
            }
            catch(\Exception $e){
                $exception=$e;
            }

            $this->assertNull($exception);

        }

    }

    /**
     *
     */
    public function testConstructorInvalidArgumentException(){

        $exception=null;
        try{
            new HTTPAction('/user/{1}.html','unknown');
        }
        catch(\Exception $e){
            $exception=$e;
        }

        $this->assertInstanceOf(InvalidArgumentException::class,$exception);

    }

    /**
     *
     */
    public function testSupport(){

        $action=new HTTPAction('/user/{1}.html','get');

        $this->assertTrue($action->support(new HTTPRequest('url','method')));
        $this->assertFalse($action->support('unknown'));

    }

    /**
     *
     */
    public function testMatch(){

        $action=new HTTPAction('/user/{1}.html','get');
        $this->assertTrue($action->match(new HTTPRequest('/user/1232.html','get')));
        $this->assertTrue($action->match(new HTTPRequest('/user/32211sdw2.html','get')));
        $this->assertFalse($action->match(new HTTPRequest('/user/1232ahtml','get')));
        $this->assertFalse($action->match(new HTTPRequest('/user/.html','get')));
        $this->assertFalse($action->match(new HTTPRequest('/user/1232.html','put')));

    }

}