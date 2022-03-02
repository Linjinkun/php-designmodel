<?php

namespace ObjectPool;

/**
 * 模拟需求对象
 */
class Image
{
    public $id;

    public $title = '我是需求';

    /**
     * 构造函数
     */
    public function __construct()
    {
        $this->id = time();
    }

}
