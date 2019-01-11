<?php

abstract class AbstractArticle
{
	protected $text;
	protected $name;
	protected $title;
	protected $keyWords;
	
	public function __construct(string $name, string $text)
	{
		$this->name = $name;
		$this->text = $text;
	}
	
	public function setTitle(string $title) {
		$this->title = $title;
	}
	
	public function getTitle():string {
		return $this->title;
	}
	
	public function setKeyWords(string $keyWords) {
		$this->keyWords= $keyWords;
	}
	
	public function getKeyWords(): string {
		return $this->keyWords;
	}
	
	public function quoteSpecialChars($string): string {
		return htmlspecialchars($string);
	}
	
	abstract public function render();
}