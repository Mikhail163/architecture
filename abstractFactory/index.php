<?php 
require_once 'AbstractArticle.php';
require_once 'AbstractFactory.php';
require_once 'HtmlArticle.php';
require_once 'HtmlFactory.php';
require_once 'RssArticle.php';
require_once 'RssFactory.php';
require_once 'Article.php';


// Создаем различные фабрики
$htmlFactory = new HtmlFactory();
$rssFactory = new RssFactory();

$article = new Article('Имя первой статьи', 'Контент первой статьи созданный по последнему слову техники');
$article->setTitle('Шок! Новая статья Скидки');
$article->setKeyWords('статья, статья москва, первая статья, купить статью в москве');

// Создаем html версию статьи
echo $article->setFactory($htmlFactory)->render();

// Создаем rss версию статью
echo $article->setFactory($rssFactory)->render();