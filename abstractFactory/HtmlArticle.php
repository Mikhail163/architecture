<?php

class HtmlArticle extends AbstractArticle
{
	public function render(): string {
		return 
'
<!DOCTYPE html>
<html>
	<head>
		<title>'.$this->title.'</title>
        <meta name="keywords" content="'.$this->keyWords.'" />
	</head>
	<body>
		<h1>'.$this->name.'</h1>
		<p>'.$this->text.'</p>
	</body>
</html>
';
	}
}