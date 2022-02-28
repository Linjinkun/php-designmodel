<?php

class Loader
{
    /**
     * 路径映射
     *
     * @var string[]
     */
    public static $vendorMap = [
        'AbstractFactory' => __DIR__ . DIRECTORY_SEPARATOR . 'AbstractFactory', //抽象工厂模式
        'Builder' => __DIR__ . DIRECTORY_SEPARATOR . 'Builder', //建造者模式
    ];

    /**
     * 自动加载器
     *
     * @param mixed $class
     */
    public static function autoload($class)
    {
        $file = self::findFile($class);
        if (file_exists($file)) {
            self::includeFile($file);
        }
    }

    /**
     * 解析文件路径
     *
     * @param mixed $class
     */
    private static function findFile($class)
    {
        $vendor = substr($class, 0, strpos($class, '\\')); // 顶级命名空间
        $vendorDir = self::$vendorMap[$vendor]; // 文件基目录
        $filePath = substr($class, strlen($vendor)) . '.php'; // 文件相对路径

        return strtr($vendorDir . $filePath, '\\', DIRECTORY_SEPARATOR); // 文件标准路径
    }

    /**
     * 引入文件
     *
     * @param mixed $file
     */
    private static function includeFile($file)
    {
        if (is_file($file)) {
            include $file;
        }
    }
}
