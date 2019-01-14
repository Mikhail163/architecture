<?php

/**
 * Класс обработки основного контента сайта
 */
class Content extends component
{
	public function render(): string {
		return '<div id="content">Контент сайта</div>'.parent::render();
	}
}