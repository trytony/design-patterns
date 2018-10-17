<?php

namespace Zhangbingliang\DesignPatterns\SimpleFactory;

/**
 * 工厂类
 *
 * Class Factory
 * @package Zhangbingliang\DesignPatterns\SimpleFactory
 */
class Factory
{
    /**
     * @param $operate
     * @return Add|Divide|Multiply|Subtract
     */
    public function create($operate)
    {
        switch ($operate) {
            case '+':
                $result = new Add();
                break;
            case '-':
                $result = new Subtract();
                break;
            case '*':
                $result = new Multiply();
                break;
            case '/':
                $result = new Divide();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的运算');
        }
        return $result;
    }
}

$factory = new Factory();
$operation = $factory->create('+');
$operation->setLeftValue(1);
$operation->setRightValue(2);
$result = $operation->calculate();
echo $result;