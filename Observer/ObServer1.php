<?php

namespace Zhangbingliang\DesignPatterns\Observer;

class ObServer1 implements ObServer
{
    public function update(?string $data = null)
    {
        echo "ObServer1 收到通知了！！！<br/>";
    }
}