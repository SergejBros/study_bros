<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 16.12.2018
 * Time: 16:24
 */

class Student extends User{
    private $grants;
    private $course;

    /**
     * @return mixed
     */
    public function getGrants()
    {
        return $this->grants;
    }

    /**
     * @param mixed $grants
     */
    public function setGrants($grants): void
    {
        $this->grants = $grants;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course): void
    {
        $this->course = $course;
    }



}