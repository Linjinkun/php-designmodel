<?php

namespace FactoryMethod;

/**
 * 工厂方法抽象类
 */
abstract class FactoryMethod
{
    public const CHEAP = 1;
    public const FAST = 2;
    public const BIG = 3;

    /**
     * 子类必须实现该方法
     *
     * @param string $type a generic type
     *
     * @return VehicleInterface a new vehicle
     */
    abstract protected function createVehicle($type);

    /**
     * 创建新的车辆
     *
     * @param int $type
     *
     * @return VehicleInterface a new vehicle
     */
    public function create($type)
    {
        $obj = $this->createVehicle($type);

        echo "==> 产品上漆\n\n";
        $obj->setColor('#f00');

        return $obj;
    }
}
