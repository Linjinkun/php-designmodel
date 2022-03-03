<?php

namespace ObjectPool;

class Worker
{
    /**
     * @param $query
     * @param array $callback
     *
     * @return void
     */
    public function run($query, array $callback)
    {
        // 假设执行查询
        var_dump($query);

        // 归还连接
        call_user_func($callback, $this);
    }
}
