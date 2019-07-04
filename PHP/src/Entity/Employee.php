<?php

namespace App\Entity;

/**
 * Class Employee
 * @package App\Entity
 */
abstract class Employee
{
    /**
     * @return array
     */
    abstract public function getSkills();

    public function showSkills()
    {
        foreach ($this->getSkills() as $skill) {
            print "-$skill;\n";
        }
    }

    /**
     * @param string $skill
     * @return string
     */
    public function checkSkill($skill)
    {
        return array_key_exists($skill, $this->getSkills()) ? 'true' : 'false';
    }
}