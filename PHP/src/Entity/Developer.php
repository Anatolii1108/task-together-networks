<?php

namespace App\Entity;

use App\Entity\Enum\Skill;

/**
 * Class developer
 * @package App\Entity
 */
class Developer extends Employee
{
    /**
     * @return array
     */
    public function getSkills()
    {
        return [
            'writeCode' => Skill::CODE_WRITING,
            'testCode' => Skill::CODE_TESTING,
            'communicateWithManager' => Skill::COMMUNICATION_WITH_MANAGER
        ];
    }
}