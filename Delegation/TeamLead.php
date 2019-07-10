<?php

namespace Zhangbingliang\DesignPatterns\Delegation;

/**
 * TeamLead类
 * @package Zhangbingliang\DesignPatterns\Delegation
 * `TeamLead` 类将工作委托给 `JuniorDeveloper`
 */
class TeamLead
{
    /** @var JuniorDeveloper */
    protected $slave;

    /**
     * 在构造函数中注入初级开发者JuniorDeveloper
     * @param JuniorDeveloper $junior
     */
    public function __construct(JuniorDeveloper $junior)
    {
        $this->slave = $junior;
    }

    /**
     * TeamLead 喝咖啡, JuniorDeveloper 工作
     * @return mixed
     */
    public function writeCode()
    {
        return $this->slave->writeBadCode();
    }
}
