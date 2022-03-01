<?php

/**
 * 测试类
 */
require __DIR__ . '/../Init.php';

use FactoryMethod\Factory;
use FactoryMethod\FactoryMethod;

$types = [
    FactoryMethod::CHEAP,
    FactoryMethod::FAST,
    FactoryMethod::BIG,
];

$italianFactory = new Factory\ItalianFactory();
$germanFactory = new Factory\GermanFactory();

// 该方法扮演客户端角色，我们不关心什么工厂，我们只知道可以可以用它来造车
foreach ($types as $key => $type) {
    $italianFactory->create($type);

    $germanFactory->create($type);
}
