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
 * Class ActionNotFoundException
 * @package Via
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
class ActionNotFoundException extends \Exception
{

    /**
     * ActionNotFoundException constructor.
     */
    public function __construct()
    {
        parent::__construct('Action not found.');
    }
}