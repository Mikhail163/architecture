<?php

namespace Decorator\TextFormat;

use Decorator\TextFormat\TextDecorator;

/**
 * Этот Конкретный Декоратор удаляет все теги HTML из данного текста.
 */
class PlainTextFilter extends TextDecorator
{
	public function formatText(string $text): string
	{
		$text = parent::formatText($text);
		return strip_tags($text);
	}
}