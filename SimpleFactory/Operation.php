<?php

namespace Zhangbingliang\DesignPatterns\SimpleFactory;

/**
 * Class Operation
 * @package Zhangbingliang\DesignPatterns\SimpleFactory
 */
abstract class Operation {

    /**
     * 运算左边的值
     *
     * @var int
     */
    protected $leftValue = 0;

    /**
     * 运算右边的值
     *
     * @var int
     */
    protected $rightValue = 0;

    /**
     * 计算
     *
     * @return mixed
     */
    abstract public function calculate();

    /**
     * 设置运算左边的值
     *
     * @param $leftValue
     * @return $this
     */
    public function setLeftValue($leftValue)
    {
        $this->leftValue = $leftValue;

        return $this;
    }

    /**设置运算右边的值
     *
     * @param $rightValue
     * @return $this
     */
    public function setRightValue($rightValue)
    {
        $this->rightValue = $rightValue;

        return $this;
    }
}