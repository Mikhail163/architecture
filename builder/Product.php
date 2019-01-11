<?php
/**
 * 
 * Порождающий шаблон проектирования "Строитель"
 * @author Mikhail Uvarov
 *
 */
class Product
{
	protected $price;
	protected $discountPrice;
	protected $name;
	protected $description;
	
	private $realPrice = 0;
	
	public function __construct(ProductBuilder $builder) {
		$this->price = $builder->price;
		$this->discountPrice = $builder->discountPrice;
		$this->name = $builder->name;
		$this->description = $builder->description;
		
		$this->realPrice= ($this->discountPrice == 0 || $this->discountPrice >= $this->price) 
			? $this->price : $this->discountPrice;
	
	}
	
	public function render() {
		echo "Название: {$this->name}\nОписание: {$this->description}\nЦена {$this->realPrice}\n";
	}
	
}