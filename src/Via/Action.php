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
 * Interface Action
 * @package Via
 */
interface Action
{

    /**
     * Check compatible input data.
     *
     * @param mixed $data
     * @return bool
     */
    public function support($data);

    /**
     * Check matched data to action.
     * @param mixed $data
     * @return bool
     */
    public function match($data);

}