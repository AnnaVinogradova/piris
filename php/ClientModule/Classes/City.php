<?php

/**
 * Created by PhpStorm.
 * User: anna
 * Date: 10/2/16
 * Time: 6:22 PM
 */
class City
{
    private $id;
    private $name;

     /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
    public function setName($name)
    {
        $this->name = $name;
    }
}