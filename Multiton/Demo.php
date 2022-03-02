<?php
/**
 * 测试类
 */
require __DIR__ . '/../Init.php';
use Multiton\Multiton;

// 是建造者模式的一部分，它知道建造者接口并通过建造者构建复杂对象
$redis = Multiton::getInstance('redis')->connect();
$mysql = Multiton::getInstance('mysql')->connect();
$mysql2 = Multiton::getInstance('mysql')->connect();
$mysql3 = Multiton::getInstance('mysql')->connect();

print_r($redis);
print_r("---------redis---end---------------\n");
print_r($mysql);
print_r("---------mysql---end---------------\n");
print_r($mysql2);
print_r("---------mysql---end---------------\n");
print_r($mysql3);
exit;
