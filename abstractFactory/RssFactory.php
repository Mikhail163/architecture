<?php 

class RssFactory extends AbstractFactory
{
	public function createArticle(string $name, string $content): AbstractArticle
	{
		return new RssArticle($name, $content);
	}
	
	public function createNewsFeed(array $news): AbstractNewsFeed
	{
		return new RssNewsFeed($news);
	}
}