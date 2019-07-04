<?php

namespace App\Entity;

use App\Entity\Enum\Skill;

/**
 * Class Tester
 * @package App\Entity
 */
class Tester extends Employee
{
    /**
     * @return array
     */
    public function getSkills()
    {
        return [
            'testCode' => Skill::CODE_TESTING,
            'communicateWithManager' => Skill::COMMUNICATION_WITH_MANAGER
        ];
    }
}