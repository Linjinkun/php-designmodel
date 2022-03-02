<?php

namespace ObjectPool;

/**
 * 分配管理中心
 */
class Processor
{

    private $pool;
    private $processing = 0;
    private $maxProcesses = 3;
    private $waitingQueue = [];

    public function __construct(Pool $pool)
    {
        $this->pool = $pool;
    }

    /**
     * 进程
     *
     * @param $image
     * @return void
     */
    public function process($image)
    {
        if ($this->processing++ < $this->maxProcesses) {
            $this->createWorker($image);
        } else {
            $this->pushToWaitingQueue($image);
        }
    }

    /**
     * 创建进程
     *
     * @param $image
     * @return void
     */
    private function createWorker($image)
    {
        $worker = $this->pool->get();
        $worker->run($image, array($this, 'processDone'));
    }

    /**
     * 处理完成
     *
     * @param $worker
     * @return void
     */
    public function processDone($worker)
    {
        $this->processing--;
        $this->pool->dispose($worker);

        if (count($this->waitingQueue) > 0) {
            $this->createWorker($this->popFromWaitingQueue());
        }
    }

    /**
     * 等待入栈队列
     *
     * @param $image
     * @return void
     */
    private function pushToWaitingQueue($image)
    {
        $this->waitingQueue[] = $image;
    }

    /**
     * 等待出栈队列
     *
     * @return mixed|null
     */
    private function popFromWaitingQueue()
    {
        return array_pop($this->waitingQueue);
    }
}