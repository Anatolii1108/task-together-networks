<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use App\Command\EmployeeSkillsCommand;
use App\Command\CheckEmployeeSkillCommand;

$application = new Application();

$application->add(new EmployeeSkillsCommand());
$application->add(new CheckEmployeeSkillCommand());

$application->run();