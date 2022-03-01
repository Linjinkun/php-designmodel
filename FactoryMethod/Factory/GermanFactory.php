<?php

namespace FactoryMethod\Factory;

use FactoryMethod\FactoryMethod;

/**
 * GermanFactory是德国的造车厂
 */
class GermanFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                echo "创建德国自行车\n";

                return new Product\Bicycle();

            case parent::FAST:
                echo "创建德国保时捷\n";
                $obj = new Product\Porsche();

                // 因为我们已经知道是什么对象所以可以调用具体方法
                $obj->addTuningAMG();

                return $obj;

            case parent::BIG:
                echo "创建德国挖掘机\n";

                return new Product\Excavate();
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
