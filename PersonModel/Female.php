<?php

class Female extends Person
{
    /**
     * @var int
     */
    private $cycle;

    public function __construct($arrData)
    {
        $this->setAge($arrData['age']);
        $this->setFirstName($arrData['first_name']);
        $this->setLastName($arrData['last_name']);
        $this->setIdentifier($arrData['identifier']);
        $this->setWeight($arrData['weight']);
        $this->setCycle($arrData['cycle']);
    }

    /**
     * @return string
     */
    public function reproduction()
    {
       return "The female reproductive system (or female genital system) is made up of the internal and external sex organs that function in reproduction. ";
    }

    /**
     * @return string
     */
    public function femaleInfo()
    {
       echo "My name is ". $this->getFirstName() .", I'm " . $this->getAge() . " old.
             My respiratory system contains " . $this->breathing(). ".
             I' eating " . $this->eat(). ".
             My cycles last " . $this->getCycle() ." days." .
             $this->reproduction();
    }


    /**
     * @param int $intDays
     */

    public function setCycle($intDays)
    {
       $this->cycle = $intDays;
    }

    /**
     * @return int cycle
     */
    public function getCycle()
    {
       return $this->cycle;
    }
}