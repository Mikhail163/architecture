<?php
require_once 'component.php';
require_once 'composite.php';
require_once 'leaf/content.php';
require_once 'leaf/footer.php';
require_once 'leaf/header.php';

$main = new Composite('main');

$main->add(new Header('header'));
$main->add(new Content('content'));
$main->add(new Footer('footer'));

echo $main->render();