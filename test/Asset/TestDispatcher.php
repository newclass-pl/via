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

namespace Test\Asset;

use Via\Dispatcher;

/**
 * Class TestDispatcher
 * @package Test\Asset
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
class TestDispatcher implements Dispatcher{

    /**
     * @var string
     */
	private $name;

    /**
     * TestDispatcher constructor.
     * @param string $name
     */
	public function __construct($name){
		$this->name=$name;
	}

    /**
     * @return string
     */
	public function getName(){
		return $this->name;
	}

    /**
     *
     */
	public function execute(){
		//ignore
	}

}