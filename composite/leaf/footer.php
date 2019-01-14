<?php
/**
 * Класс обработки подвала сайта
 */
class Footer extends component
{
	public function render(): string {
		return '<footer>Подвал сайта</footer>'.parent::render();
	}
}