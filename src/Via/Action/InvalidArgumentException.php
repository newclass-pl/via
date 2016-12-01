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


use Exception;

/**
 * Class InvalidArgumentException
 * @package Via\Action
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
class InvalidArgumentException extends \Exception
{
    /**
     * InvalidArgumentException constructor.
     * @param string $value
     * @param string $expected
     */
    public function __construct($value, $expected)
    {
        parent::__construct('Invalid argument "'.$value.'". Expected: '.$expected.'.');
    }

}