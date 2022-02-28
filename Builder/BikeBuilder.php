<?php

namespace Builder;

/**
 * BikeBuilder用于建造自行车
 */
class BikeBuilder implements BuilderInterface
{
    protected $title = '自行车';

    /**
     * @var Parts\Bike
     */
    protected $bike;

    /**
     * {@inheritdoc}
     */
    public function addDoors()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function addEngine()
    {
        $this->bike->setPart('engine', (new Parts\Engine())->create('发动机'));
    }

    /**
     * {@inheritdoc}
     */
    public function addWheel()
    {
        $this->bike->setPart('forwardWheel', (new Parts\Wheel())->create('前轮'));
        $this->bike->setPart('rearWheel', (new Parts\Wheel())->create('后轮'));
    }

    /**
     * {@inheritdoc}
     */
    public function createVehicle()
    {
        $this->bike = new Parts\Bike();
        $this->bike->setPart('start', '制作' . $this->title . '[开始]');
    }

    /**
     * {@inheritdoc}
     */
    public function getVehicle()
    {
        $this->bike->setPart('end', '制作' . $this->title . '[完成]');

        return $this->bike;
    }
}
