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
 * Factory for dispatcher. 
 * @author Michal Tomczak (michal.tomczak@newclass.pl)
 */
class Router{
	
	/**
	 *
	 * @var mixed[]
	 */
	private $actions=[];

    /**
     *
     * @param Action $action
     * @param Dispatcher $dispatcher
     */
	public function addAction(Action $action,Dispatcher $dispatcher){
		$this->actions[spl_object_hash($action)]=[
		    'config'=>$action,
		    'dispatcher'=>$dispatcher,
        ];
	}

    /**
     * @param Action $action
     * @throws ActionNotFoundException
     */
	public function removeAction(Action $action){
	    $hash=spl_object_hash($action);
	    if(!isset($this->actions[$hash])){
	        throw new ActionNotFoundException();
        }
	    unset($this->actions[spl_object_hash($action)]);
    }

    /**
     * @param mixed $data
     * @return Dispatcher
     * @throws RouteNotFoundException
     * @internal param string $url
     */
	public function createDispatcher($data){
		$dispatcher=$this->findAction($data);

		if($dispatcher){
			return $dispatcher;
		}

		throw new RouteNotFoundException();
	}

	/**
	 * Find action routing
	 *
	 * @param mixed $data
	 * @return Dispatcher
	 */
	private function findAction($data){
		foreach($this->actions as $action){
            /**
             * @var Action $config
             */
		    $config=$action['config'];
		    if(!$config->support($data)){
		        continue;
            }

		    if($config->match($data)){
		        return $action['dispatcher'];
            }
		}

		return null;

	}

}