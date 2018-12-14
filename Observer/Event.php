<?php

namespace Zhangbingliang\DesignPatterns\Observer;

class Event extends EventGenerator
{
    /**
     * 触发事件
     */
    public function trigger()
    {
        //通知观察者
        $this->notify();
    }
}