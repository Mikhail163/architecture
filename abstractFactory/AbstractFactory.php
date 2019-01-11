<?php 

abstract class AbstractFactory
{
	abstract public function createArticle(string $name, string $content): AbstractArticle;
	abstract public function createNewsFeed(array $news): AbstractNewsFeed;
}