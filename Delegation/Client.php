<?php

namespace Zhangbingliang\DesignPatterns\Delegation;

require __DIR__ . '/../vendor/autoload.php';


$teamLead = new TeamLead(new JuniorDeveloper());

echo $teamLead->writeCode();