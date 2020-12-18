<?php

namespace Source;

class Book
{

    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }
}
