<?php

namespace Zhangbingliang\DesignPatterns\FluentInterface;

require __DIR__.'/../vendor/autoload.php';

/**
 * Class FluentInterfaceTest
 * @package Zhangbingliang\DesignPatterns\FluentInterface
 */
class Client
{

    public function buildSQL()
    {
        $instance = new Sql();
        $query = $instance->select(array('foo', 'bar'))
            ->from('foobar', 'f')
            ->where('f.bar = ?')
            ->getQuery();

        echo $query;
    }

}

$client = new Client();
$client->buildSQL();