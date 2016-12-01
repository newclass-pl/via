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
use Via\Action\StringAction;

/**
 * Class StringActionTest
 * @package Test\Via
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
class StringActionTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testSupport(){

        $action=new StringAction('short data');

        $this->assertTrue($action->support('string'));
        $this->assertFalse($action->support(true));

    }

    /**
     *
     */
    public function testMatch(){

        $action=new StringAction('short data');
        $this->assertTrue($action->match('short data'));
        $this->assertFalse($action->match('long data'));
        $this->assertFalse($action->match(false));

    }

}