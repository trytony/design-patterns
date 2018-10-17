<?php

namespace Zhangbingliang\DesignPatterns\SimpleFactory;

/**
 * Class Bad
 * @package Zhangbingliang\DesignPatterns\SimpleFactory
 */
class Bad
{
    /**
     * 计算
     *
     * @param $leftValue
     * @param $rightValue
     * @param $operate
     * @return float|int
     */
    public function calculate($leftValue, $rightValue, $operate)
    {
        switch ($operate) {
            case '+':
                $result = $leftValue + $rightValue;
                break;
            case '-':
                $result = $leftValue - $rightValue;
                break;
            case '*':
                $result = $leftValue * $rightValue;
                break;
            case '/':
                if ($rightValue != 0) {
                    $result = $leftValue / $rightValue;
                } else {
                    throw new \InvalidArgumentException('除数不能为0');
                }
                break;
            default:
                throw new \InvalidArgumentException('无法识别运算符号');
        }
        return $result;
    }
}