<?php 
/**
 * 
 * Класс клиент, наследуется от AbstractArticle
 * задаем все нужные параметры и можем делать две версии
 * статьи Rss и Html с помощью абстрактной фабрики
 *
 */
class Article extends AbstractArticle
{
	// Шаблон - по которому будем отрисовывать статью
	private $factory;
	
	public function setFactory(AbstractFactory $factory)
	{
		$this->factory = $factory;
		return $this;
	}
	
	public function render() {
		
		$result = '';
		
		if (isset($this->factory)) {
			$article = $this->factory->createArticle($this->name, $this->text);
			$article->setTitle($this->title);
			$article->setKeyWords($this->keyWords);
			$result = $article->render();
		}
		
		return $result;
	}
}