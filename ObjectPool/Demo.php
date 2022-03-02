<?php
/**
 * 测试类
 */
require __DIR__ . '/../Init.php';
use ObjectPool\Pool;
use ObjectPool\Processor;
use ObjectPool\Worker;
use ObjectPool\Image;

$image1 = new Image();
//$image2 = new \ObjectPool\Image(2);

$worker1 = new Worker();

$pool = new Pool($worker1);

print_r($pool);exit;

$pool->dispose($image1);

print_r($pool->get()->id)."\n";

print_r($pool->getInstances());
exit;

$worker1 = new Worker();
$pool = new Pool($worker1);
$processor = new Processor($pool);

print_r($processor->process()); exit;

exit;
