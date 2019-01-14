<?php 

class Composite extends Component
{
	private $_children = [];
	

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