<?php

namespace Zhangbingliang\DesignPatterns\SimpleFactory;

/**
 * 除法
 *
 * Class Add
 * @package Zhangbingliang\DesignPatterns\SimpleFactory
 */
class Divide extends Operation
{
    public function calculate()
    {
        if ($this->rightValue == 0) {
            throw new \InvalidArgumentException('除数不能为0');
        }
        return $this->leftValue / $this->rightValue;
    }
}