<?php 
/**
 * Реализуем паттерн Компоновщик
 * Наш компоновщик очень прост - он отрисовывает 
 * все дочерние блоки
 * Вся основная нагрузка ложится на универсальный класс Component
 */
class Composite extends Component
{
	public function display() {
		echo $this->render();
	}
}