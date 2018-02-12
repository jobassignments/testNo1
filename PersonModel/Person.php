<?php

abstract class Person extends LivingBeing implements LivingBeingInterface
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var int
     */
    private $identifier;

    /**
     * Set First name
     *
     * @param string $strFirstName
     */
    public function setFirstName($strFirstName)
    {
        $this->firstName = $strFirstName;
    }

    /**
     * Get First name
     *
     * @return  string firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set Last name
     *
     * @param string $lastName
     */

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get Last name
     *
     * @return  string lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }


    /**
     * Set identifier
     *
     * @param  int $identifier
     */
    protected function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }


    /**
     * get identifier
     *
     * @return  int identifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     *
     * @return  string
     */
    public function breathing()
    {
        return "";
    }

    /**
     *
     * @return  string
     */
    public function eat()
    {
        return "processed food";
    }
}