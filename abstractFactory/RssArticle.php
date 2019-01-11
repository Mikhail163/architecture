<?php

class RssArticle extends AbstractArticle
{
	public function render(): string {
		return
		'
<item turbo="true">
  <title>'.$this->title.'</title>
  <turbo:content>
    <![CDATA[
      <header>
        <h1>'.$this->name.'</h1>
      </header>
      <p>'.$this->text.'</p>
    ]]>
    </turbo:content>
</item>
';
	}
}