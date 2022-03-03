<?php
/**
 * 测试类
 */
require __DIR__ . '/../Init.php';
use ObjectPool\Pool;
use ObjectPool\Processor;

var_dump('==========================pool版===========================================');

// 假设这个是一个数据库链接
class Connection
{
}

// 创建对象池
$pool = new Pool(Connection::class);

// 模拟协程1获取连接
$connection1 = $pool->get();
// 链接处理中
var_dump(spl_object_id($connection1));

// 模拟协程2获取连接
$connection2 = $pool->get();
$connection3 = $pool->get();
// 链接处理中
var_dump(spl_object_id($connection2));
var_dump(spl_object_id($connection3));

// 两个协程都处理完毕，归还链接到对象池
$pool->dispose($connection1);
$pool->dispose($connection2);
$pool->dispose($connection3);

var_dump('=====池里有[' . count($pool->getInstances()) . ']个对象=====');

// 其他协程再次使用这个对象池
$connection1 = $pool->get();
var_dump($pool);
var_dump(spl_object_id($connection1));

$connection2 = $pool->get();
var_dump(spl_object_id($connection2));

$pool->dispose($connection1);
var_dump('=====池里有[' . count($pool->getInstances()) . ']个对象=====');
$pool->dispose($connection2);

var_dump('==========================完整版===========================================');

// 假设这个是一个数据库链接
class Connection2
{
    public function run($query, array $callback)
    {
        // 假设执行查询
        var_dump($query);

        // 归还连接
        call_user_func($callback, $this);
    }
}

// 创建对象池
$pool = new Pool(Connection2::class);
// 创建工作进程
$processor = new Processor($pool);

for ($i = 1; $i <= 5; $i++) {
    $processor->process('select * from tableA where id=' . $i);
}

var_dump('池里有' . count($pool->getInstances()) . '个对象');
