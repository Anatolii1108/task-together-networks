<?php

namespace App\Command;

use App\Entity\Company;
use App\Entity\Employee;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckEmployeeSkillCommand extends Command
{
    protected static $defaultName = 'app:check-employee-skill';

    protected function configure()
    {
        $this
            ->setDescription('Get skills of employee.')
            ->setHelp('This command allows you to get list of skills of employee.')
            ->addArgument('employee', InputArgument::REQUIRED, 'Type of employee.')
            ->addArgument('skill', InputArgument::REQUIRED, 'Type of skill.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /**@var Employee $employee*/
        $employee = Company::getEmployee($input->getArgument('employee'));

        $output->writeln($employee->checkSkill($input->getArgument('skill')));
    }
}