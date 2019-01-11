<?php
require_once 'Product.php';
require_once 'ProductBuilder.php';

/**
 * Проверяем пораждающий шаблон проеткирования Строитель
 */

$product = (new ProductBuilder('Тестовый товар'))
	->addPrice(1000)
	->addDiscountPrice(800)
	->addDescription('Новый товар сделанный по современным стандартам с применением нанотехнологий')
	->build();

$product->render();
