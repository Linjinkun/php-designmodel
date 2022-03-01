<?php

namespace FactoryMethod\Factory;

use FactoryMethod\FactoryMethod;

/**
 * ItalianFactory是意大利的造车厂
 */
class ItalianFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                echo "创建意大利自行车\n";

                return new Product\Bicycle();
            case parent::FAST:
                echo "创建意大利保时捷\n";

                return new Product\Ferrari();

            case parent::BIG:
                echo "创建意大利挖掘机\n";

                return new Product\Excavate();
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
