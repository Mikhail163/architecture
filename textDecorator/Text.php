<?php

namespace Decorator\TextFormat;

use Decorator\TextFormat\iText;
/**
 * Конкретный Компонент является основным элементом декорирования. Он содержит
 * исходный текст как есть, без какой-либо фильтрации или форматирования.
 */
class Text implements iText
{
	public function formatText(string $text): string
	{
		return $text;
	}
}