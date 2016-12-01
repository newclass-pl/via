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
 * Class StringAction
 * @package Via\Action
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
class StringAction implements Action
{

    /**
     * @var string
     */
    private $string;

    /**
     * StringAction constructor.
     * @param string $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * Check compatible input data.
     *
     * @param mixed $data
     * @return bool
     */
    public function support($data)
    {
        return is_string($data);
    }

    /**
     * Check matched data to action.
     * @param mixed $data
     * @return bool
     */
    public function match($data)
    {
       return $data===$this->string;
    }
}