<?php

namespace Decorator\TextFormat;

/**
 * Паттерн Декоратор
 *
 * Назначение: Динамически подключает к объекту дополнительную функциональность.
 * Декораторы предоставляют гибкую альтернативу практике создания подклассов для
 * расширения функциональности.
 *
 * Пример: В этом примере паттерн Декоратора помогает создать сложные правила
 * фильтрации текста для приведения информации в порядок перед её отображением
 * на веб-странице. Разные типы информации, такие как комментарии, сообщения на
 * форуме или личные сообщения, требуют разных наборов фильтров.
 *
 * Например, вы хотели бы удалить весь HTML из комментариев и в тоже время
 * сохранить некоторые основные теги HTML в сообщениях на форуме. Кроме того, вы
 * можете пожелать  разрешить публикацию в формате Markdown, который должен быть
 * обработан перед какой-либо фильтрацией HTML. Все эти правила фильтрации могут
 * быть представлены в виде отдельных классов декораторов, которые могут быть
 * сложены в стек по-разному, в зависимости от характера содержимого.
 */

/**
 * Интерфейс Компонента объявляет метод фильтрации, который должен быть
 * реализован всеми конкретными компонентами и декораторами.
 */
interface iText
{
	public function formatText(string $text): string;
}