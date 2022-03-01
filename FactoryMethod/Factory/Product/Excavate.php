<?php

namespace FactoryMethod\Factory\Product;

use FactoryMethod\VehicleInterface;

/**
 * Excavate（挖掘机）
 */
class Excavate implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    /**
     * 尽管只有奔驰汽车挂有AMG品牌，这里我们提供一个空方法仅作代码示例
     */
    public function addTuningAMG()
    {
        echo "添加奔驰AMG\n";
    }

    /**
     * 添加挖勺
     *
     * @return void
     */
    public function addClaw()
    {
        echo "添加挖勺AMG\n";
    }
}
