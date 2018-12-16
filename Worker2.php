<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 16.12.2018
 * Time: 15:33
 */

class Worker2
{
    private $name;
    private $age;
    private $salary;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        if($this->checkAge($age) == 'Y') {
            $this->age = $age;
        }
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function checkAge($age){
        if($age >= 1 && $age <= 100){
            return 'Y';
        }
        else{
            return 'N';
        }
    }

}