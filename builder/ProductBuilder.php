<?php
/**
 * 
 * Шаблон строитель
 *
 */
class ProductBuilder
{
	public $price = 0;
	public $discountPrice = 0;
	public $name = '';
	public $description = '';

    public function __construct(string $name)
    {
    	$this->name = $name;
    }

    public function addPrice(int $price)
    {
    	if ($price > 0) {
    		$this->price = $price;
    	}
    	
        return $this;
    }

    public function addDiscountPrice(int $discountPrice)
    {
    	if ($discountPrice > 0) {
    		$this->discountPrice = $discountPrice;
    	}
    	
    	return $this;
    }

    public function addDescription(string $description)
    {
    	$this->description = $description;
        return $this;
    }

    public function build(): Product
    {
    	return new Product($this);
    }
}