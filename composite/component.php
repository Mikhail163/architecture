<?php 
/**
 * Базовый компонент системы
 * Это строительный блок нашего сайта
 * который мы можем отрендерить, если у 
 * этого блока есть дочерние элементы - 
 * то их мы тоже отрендерим
 */
abstract class Component
{
	
	protected $_children = [];	
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
	public function render():string {
		$html = '';
		foreach($this->_children as $child) {
			$html .= $child->render();
		}
		return $html;
	}
	
	public function add(Component $c) {
		$this->_children[$c->getName()] = $c;
	}
	
	public function remove(Component $c) {
		unset($this->_children[$c->getName()]);
	}
}