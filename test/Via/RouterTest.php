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
use Via\Router;
use Test\Asset\TestDispatcher;

class RouterTest extends \PHPUnit_Framework_TestCase{

    /**
     * @var Router
     */
	private $router;

	protected function  setUp(){
		$this->router=new Router();
		$this->router->addAction(new HTTPAction('/users','get'),new TestDispatcher('route1'));
        $this->router->addAction(new HTTPAction('/users','post'),new TestDispatcher('route2'));
        $this->router->addAction(new HTTPAction('/users/{id}.html','post'),new TestDispatcher('route3'));
        $this->router->addAction(new HTTPAction('/users/{user}','post'),new TestDispatcher('route4'));
	}

	public function testCreateDispatcher(){

        /**
         * @var TestDispatcher $dispatcher
         */
		$dispatcher=$this->router->createDispatcher(new HTTPRequest('/users','get'));
		$this->assertEquals('route1',$dispatcher->getName());

        $dispatcher=$this->router->createDispatcher(new HTTPRequest('/users','post'));
        $this->assertEquals('route2',$dispatcher->getName());

        $dispatcher=$this->router->createDispatcher(new HTTPRequest('/users/12ddw.html','post'));
        $this->assertEquals('route3',$dispatcher->getName());

        $dispatcher=$this->router->createDispatcher(new HTTPRequest('/users/12ddw','post'));
        $this->assertEquals('route4',$dispatcher->getName());

    }
}
