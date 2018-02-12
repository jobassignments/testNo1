<?php

class Male extends Person
{

    public function __construct($arrData)
    {
        $this->setAge($arrData['age']);
        $this->setFirstName($arrData['first_name']);
        $this->setLastName($arrData['last_name']);
        $this->setIdentifier($arrData['identifier']);
    }

    /**
     *
     * @return  string
     */
    public function reproduction()
    {
        return "The main male sex organs are the penis and the testicles which produce semen and sperm, which, as part of sexual intercourse, 
                fertilize an ovum in the female's body; the fertilized ovum (zygote) develops into a fetus, which is later born as an infant.";
    }

    /**
     *
     * @return  string
     */
    public function maleInfo()
    {
        echo "My name is ". $this->setFirstName() .", I'm " . $this->getAge() . "
              My respiratory system contains " . $this->breathing(). ".
              I' eating " . $this->eat(). "";
    }
}