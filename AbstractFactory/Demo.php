<?php
require_once './HtmlFactory.php';
require_once './JsonFactory.php';

$htmlFactory = new HtmlFactory();
//$jsonFactory = new JsonFactory();


print_r(434);exit;
$article = array(
    $htmlFactory->createText('Laravel学院'),
    $jsonFactory->createPicture('/image.jpg', 'laravel-academy'),
    $jsonFactory->createText('LaravelAcademy.org')
);

print_r($article);
exit;
