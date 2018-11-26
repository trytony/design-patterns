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
        $query = $instance->select(array('name', 'age'))
            ->from('user', 'u')
            ->where('u.id = ?')
            ->getQuery();

        echo $query;
    }

}

$client = new Client();
$client->buildSQL();