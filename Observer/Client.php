<?php

namespace Zhangbingliang\DesignPatterns\Observer;

require __DIR__ . '/../vendor/autoload.php';

//创建一个事件
$event = new Event();

//为事件增加旁观者
$event
    ->add(new ObServer1())
    ->add(new ObServer2());

//执行事件 通知旁观者
$event->trigger();