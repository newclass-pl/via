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


namespace Via;


/**
 * Throw when executed url not configured in config/actions.xml
 *
 * @author Michal Tomczak (michal.tomczak@itephp.com)
 */
class RouteNotFoundException extends \Exception{
	
	/**
	 * Constructor.
	 *
	 */
	public function __construct(){
		parent::__construct('Route not found.');
	}
}