<?php

namespace Zhangbingliang\DesignPatterns\SimpleFactory;

/**
 * 乘法
 *
 * Class Add
 * @package Zhangbingliang\DesignPatterns\SimpleFactory
 */
class Multiply extends Operation
{
    public function calculate()
    {
        return $this->leftValue * $this->rightValue;
    }
}