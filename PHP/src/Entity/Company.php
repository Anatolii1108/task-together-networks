<?php

namespace App\Entity;

use App\Entity\Enum\EmployeePosition;

/**
 * Class Designer
 * @package App\Entity
 */
class Company
{
    /**
     * @param string $type
     * @return Employee
     * @throws \Exception
     */
    public static function getEmployee($type)
    {
        switch ($type) {
            case EmployeePosition::DEVELOPER:
                return new Developer();
            case EmployeePosition::DESIGNER:
                return new Designer();
            case EmployeePosition::TESTER:
                return new Tester();
            case EmployeePosition::MANAGER:
                return new Manager();
            default:
                throw new \Exception('Unknown employee position.');
        }
    }
}