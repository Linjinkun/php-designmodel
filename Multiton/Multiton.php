<?php

namespace Multiton;

/**
 * Multiton类
 */
class Multiton
{
    /** 第一个实例 */
    public const mysql = 'mysql';

    /** 第二个实例 */
    public const redis = 'redis';

    /**
     * 实例数组
     *
     * @var array
     */
    private static $instances = [];

    /**
     * 构造函数是私有的，不能从外部进行实例化
     *
     * @param $type
     */
    private function __construct($type = 1)
    {
        if ($type) {
            echo "初始化开始\n";
        } else {
            echo "*****内部初始化开始*****\n\n";
        }
    }

    /**
     * 通过指定名称返回实例（使用到该实例的时候才会实例化）
     *
     * @param string $instanceName
     *
     * @return Multiton
     */
    public static function getInstance($instanceName)
    {
        if (!array_key_exists($instanceName, self::$instances)) {
            self::$instances[$instanceName] = new self();
            echo "----我不是{$instanceName}缓存----\n";
        }

        return self::$instances[$instanceName];
    }

    /**
     * 连接
     *
     * @return Multiton
     */
    public function connect()
    {
        return new self(0);
    }

    /**
     * 防止实例从外部被克隆
     *
     * @throws \Exception
     *
     * @return mixed
     */
    private function __clone()
    {
        throw new \Exception('Cannot clone Multiton');
    }

    /**
     * 防止实例从外部反序列化
     *
     * @throws \Exception
     *
     * @return mixed
     */
    private function __wakeup()
    {
        throw new \Exception('Cannot unserialize Multiton');
    }
}
