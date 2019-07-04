<?php

namespace App\Command;

use App\Entity\Company;
use App\Entity\Employee;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class EmployeeSkillsCommand extends Command
{
    protected static $defaultName = 'app:employee-skills';

    protected function configure()
    {
        $this
            ->setDescription('Get skills of employee.')
            ->setHelp('This command allows you to get list of skills of employee.')
            ->addArgument('employee', InputArgument::REQUIRED, 'Type of employee.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /**@var Employee $employee*/
        $employee = Company::getEmployee($input->getArgument('employee'));

        $employee->showSkills();
    }
}