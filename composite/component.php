<?php 

abstract class Component
{
	protected $_name;
	
	public function __construct($name)
	{		
		$this->_name = $name;		
	}
	
	public function getName() {
		return $this->_name;
	}
	
	/**
	 * Возвращаем отрендереный в html объект
	 * @return string
	 */
	abstract public function render():string;
	
	public function add(Component $c) {}
	public function remove(Component $c) {}
}