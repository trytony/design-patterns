<?php

namespace Zhangbingliang\DesignPatterns\Observer;

abstract class EventGenerator
{
    private $ObServers = [];

    /**
     * 增加观察者
     *
     * @param ObServer $obServer
     * @return $this
     */
    public function add(ObServer $obServer)
    {
        $this->ObServers[] = $obServer;

        return $this;
    }

    /**
     * 事件通知
     */
    public function notify()
    {
        foreach ($this->ObServers as $obServer)
        {
            $obServer->update();
        }
    }
}