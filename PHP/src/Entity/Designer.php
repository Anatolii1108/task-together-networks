<?php

namespace App\Entity;

use App\Entity\Enum\Skill;

/**
 * Class Designer
 * @package App\Entity
 */
class Designer extends Employee
{
    /**
     * @return array
     */
    public function getSkills()
    {
        return [
            'draw' => Skill::DRAWING,
            'communicateWithManager' => Skill::COMMUNICATION_WITH_MANAGER
        ];
    }
}