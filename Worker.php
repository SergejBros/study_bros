<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 12.12.18
 * Time: 20:18
 */

class Worker extends User
{
    /**
     * @var int
     */
    private $salary;

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }


}