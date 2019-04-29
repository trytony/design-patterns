<?php

namespace Zhangbingliang\DesignPatterns\Singleton;

/**
 * 普通
 *
 * Class Db1
 * @package Zhangbingliang\DesignPatterns\Singleton
 */
class Db1
{
    public static $instance = null;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function __construct()
    {
    }

    public function __clone()
    {
    }

    public function __wakeup()
    {
    }

}
$db1 = new Db1();
$db2 = new Db1();
$db3 = clone $db2;
$db4 = Db1::getInstance();
$db5 = unserialize(serialize($db4));


var_dump($db1);
echo '<hr>';
var_dump($db2);
echo '<hr>';
var_dump($db3);
echo '<hr>';
var_dump($db4);
echo '<hr>';
var_dump($db5);
echo '<hr>';