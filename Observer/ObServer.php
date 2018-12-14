<?php

namespace Zhangbingliang\DesignPatterns\Observer;

interface ObServer
{
    public function update(?string $data = null);
}