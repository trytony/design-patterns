<?php

namespace Zhangbingliang\DesignPatterns\SimpleFactory;

/**
 * 减法
 *
 * Class Add
 * @package Zhangbingliang\DesignPatterns\SimpleFactory
 */
class Subtract extends Operation
{
    public function calculate()
    {
        return $this->leftValue - $this->rightValue;
    }
}