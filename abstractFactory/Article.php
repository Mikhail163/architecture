<?php 

class Article extends AbstractArticle
{
	// Шаблон - по которому будем отрисовывать статью
	private $abstractFactory;
	
	public function setAbstractFactory(AbstractFactory $abstractFactory)
	{
		$this->abstractFactory = $abstractFactory;
		return $this;
	}
	
	public function render() {
		
		$result = '';
		
		if (isset($this->abstractFactory)) {
			$article = $this->abstractFactory->createArticle($this->name, $this->text);
			$article->setTitle($this->title);
			$article->setKeyWords($this->keyWords);
			$result = $article->render();
		}
		
		return $result;
	}
}