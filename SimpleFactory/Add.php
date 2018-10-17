<?php

namespace Zhangbingliang\DesignPatterns\SimpleFactory;

/**
 * 加法
 *
 * Class Add
 * @package Zhangbingliang\DesignPatterns\SimpleFactory
 */
class Add extends Operation
{
    public function calculate()
    {
        return $this->leftValue + $this->rightValue;
    }
}