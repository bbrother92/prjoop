<?php


class Person
{
    private $name;
    public $occupation;


    /**
     * Person constructor.
     * @param string $name
     */
    public function __construct(string $name = "NADA")
    {

        if (is_null($name) or $name == "") {
            $this->name = 'Default name';
        } else {
            $this->name = $name;
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }




}