<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 16.12.2018
 * Time: 15:57
 */

class Worker4
{
    private $name;
    public $salary;
    private $age;

    public function __construct(string $name, int $age){
        $this->age = $age;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }



}