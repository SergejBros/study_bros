<?php

class User
{

    public function __construct(string $name, DateTime $BirthDate)
        {
         $this->name = $name;
         $this->BirthDate = $BirthDate;
        }

    /**
     * @var string
     */
    public $name;

    public $age;

    /**
     * @var DateTime
     */
    protected $BirthDate;

    /**
     * @return string
     */
    public function aboutMe(){
        return 'Меня зовут ' . $this->name;
    }

    /**
     * @return DateTime
     */
    public function getBirthDate(): DateTime
    {
        return $this->BirthDate;
    }

    /**
     * @param DateTime $BirthDate
     */
    public function setBirthDate($BirthDate): void
    {
        $this->BirthDate = $BirthDate;
    }



    /**
     * @return mixed
     */
    public function getAge()
    {
        $today = new DateTime();
        $interval = $today->diff($this->BirthDate);
        return $interval->y;
    }


    public function aboutAge(): string
    {
        return 'мне ' . $this->getAge(). ' лет.';
    }


    /**
     * @return string
     */
    public function getName(): string
        {
            return $this->name;
        }


}