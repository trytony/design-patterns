<?php

namespace Zhangbingliang\DesignPatterns\SimpleFactory;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Baijunyao\DesignPatterns\SimpleFactory
 */
class Client
{
    /**
     * 不好的示例1
     */
    public function bad1()
    {
        $program = new Bad();
        $result = $program->calculate(1,  2, '+');
        echo $result;
    }

    /**
     * 不好的示例2
     */
    public function bad2()
    {
        // 计算 1+2
        $operation = new Add();
        $operation->setLeftValue(1);
        $operation->setRightValue(2);
        $result = $operation->calculate();
        echo $result;

        echo '<br>';

        // 计算 3+4
        $operation = new Add();
        $operation->setLeftValue(3);
        $operation->setRightValue(4);
        $result = $operation->calculate();
        echo $result;
    }

    /**
     * 好的示例
     */
    public function good()
    {
        $factory = new Factory();
        $operation = $factory->create('+');
        $operation->setLeftValue(1);
        $operation->setRightValue(2);
        $result = $operation->calculate();
        echo $result;
    }
}


$client = new Client();
$client->bad1();
echo '<br>';
$client->bad2();
echo '<br>';
$client->good();