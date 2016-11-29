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
 * Class RegExAction
 * @package Via\Action
 */
class RegExAction implements Action
{

    /**
     * @var string
     */
    private $pattern;

    /**
     * RegExAction constructor.
     * @param string $pattern
     */
    public function __construct($pattern)
    {
        $this->pattern = $pattern;
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
       return preg_match($this->pattern,$data)===1;
    }
}