<?php

namespace ObjectPool;

class Worker
{
    public $id;

    public function __construct()
    {
        $this->id = time();
    }

    /**
     * @param $image
     * @param array $callback
     *
     * @return void
     */
    public function run($image, array $callback)
    {
        if ($image instanceof Image) {
            $image->id = date('Y-m-d H:i:s');
        }

        call_user_func($callback, $this);
    }
}
