<?php

namespace ObjectPool;

/**
 * 需求池
 */
class Pool
{
    private $instances = [];
    private $class;

    /**
     * @param $class
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * 获取需求
     *
     * @return mixed|null
     */
    public function get()
    {
        if (count($this->instances) > 0) {
            return array_pop($this->instances);
        }

        return new $this->class();
    }

    /**
     * @return array
     */
    public function getInstances(): array
    {
        return $this->instances;
    }

    /**
     * 处理
     *
     * @param $instance
     *
     * @return void
     */
    public function dispose($instance)
    {
        $this->instances[] = $instance;
    }

    public function count(): int
    {
        return count($this->instances);
    }
}
