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
use Via\Action\RegExAction;
use Via\Action\StringAction;

class RegExActionTest extends \PHPUnit_Framework_TestCase
{


    public function testSupport(){

        $action=new RegExAction('/[0-9]+/');

        $this->assertTrue($action->support('string'));
        $this->assertFalse($action->support(true));

    }

    public function testMatch(){

        $action=new RegExAction('/[0-9]+/');
        $this->assertTrue($action->match('1232'));
        $this->assertFalse($action->match("s"));

    }

}