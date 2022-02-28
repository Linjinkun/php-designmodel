<?php
/**
 * 测试类
 */
require __DIR__ . '/../Init.php';
use Builder\BikeBuilder;
use Builder\CarBuilder;
use Builder\Director;

// 是建造者模式的一部分，它知道建造者接口并通过建造者构建复杂对象
$director = new Director();

// 制作单车
$createBike = $director->build(new BikeBuilder());

// 制作小汽车
$createCar = $director->build(new CarBuilder());

print_r($createBike);
print_r($createCar);
exit;
