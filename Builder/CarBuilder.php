<?php

namespace Builder;

/**
 * CarBuilder用于建造汽车
 */
class CarBuilder implements BuilderInterface
{
    protected $title = '法拉利跑车';
    /**
     * @var Parts\Car
     */
    protected $car;

    /**
     * @return void
     */
    public function addDoors()
    {
        $this->car->setPart('rightDoor', (new Parts\Door())->create('右门'));
        $this->car->setPart('leftDoor', (new Parts\Door())->create('左门'));
    }

    /**
     * @return void
     */
    public function addEngine()
    {
        $this->car->setPart('engine', (new Parts\Engine())->create('发动机'));
    }

    /**
     * @return void
     */
    public function addWheel()
    {
        $this->car->setPart('wheelLF', (new Parts\Wheel())->create('左前轮'));
        $this->car->setPart('wheelRF', (new Parts\Wheel())->create('右前轮'));
        $this->car->setPart('wheelLR', (new Parts\Wheel())->create('左后轮'));
        $this->car->setPart('wheelRR', (new Parts\Wheel())->create('右后轮'));
    }

    /**
     * @return void
     */
    public function createVehicle()
    {
        $this->car = new Parts\Car();
        $this->car->setPart('start', '制作' . $this->title . '[开始]');
    }

    /**
     * @return Parts\Car
     */
    public function getVehicle()
    {
        $this->car->setPart('end', '制作' . $this->title . '[完成]');
        return $this->car;
    }
}
