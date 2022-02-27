<?php
/**
 * 测试类
 */
require __DIR__ . '/../Init.php';
use AbstractFactory\HtmlFactory;
use AbstractFactory\JsonFactory;

$htmlFactory = new HtmlFactory();
$jsonFactory = new JsonFactory();
//todo 客户端需要HTML格式的Text，调用HtmlFactory的createText方法即可，而不必关心其实现逻辑
$article = [
    $htmlFactory->createText('Laravel学院'),
    $htmlFactory->createPicture('html/image.jpg', 'laravel-academy-name-html'),
    $jsonFactory->createPicture('json/image.jpg', 'laravel-academy-name-json'),
    $jsonFactory->createText('LaravelAcademy.org'),
];

print_r($article);
exit;
