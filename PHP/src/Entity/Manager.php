<?php

namespace App\Entity;

use App\Entity\Enum\Skill;

/**
 * Class Manager
 * @package App\Entity
 */
class Manager extends Employee
{
    /**
     * @return array
     */
    public function getSkills()
    {
        return [
            'setTasks' => Skill::SETTING_TASKS
        ];
    }
}