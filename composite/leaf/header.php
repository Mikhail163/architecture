<?php 

class Header extends component 
{
	public function render(): string {
		return '<header>Заголовок сайта</header>'.parent::render();
	}
}