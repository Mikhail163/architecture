<?php 
/**
 * Класс обработки шапки сайта
 */
class Header extends component 
{
	public function render(): string {
		return '<header>Заголовок сайта</header>'.parent::render();
	}
}