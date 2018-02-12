<?php

abstract class LivingBeing
{
    /**
     * @var int
     */
    private $weight;

    /**
     * @var int
     */
    private $age;


    /**
     * Set age
     *
     * @param integer $intAge
     */

    public function setAge($intAge)
    {
        $this->age = $intAge;
    }


    /**
     * Get age
     *
     * @return int age
     */

    public function getAge()
    {
        return $this->age;
    }


    /**
     * Set Weight
     *
     * @param integer $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Get age
     *
     * @return  integer weight
     */

    public function getWeight()
    {
        return $this->weight;
    }
}