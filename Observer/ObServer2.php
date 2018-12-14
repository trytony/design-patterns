<?php

namespace Zhangbingliang\DesignPatterns\Observer;

class ObServer2 implements ObServer
{
    public function update(?string $data = null)
    {
        echo "ObServer2 收到通知了！！！<br/>";
    }
}