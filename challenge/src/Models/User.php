<?php

namespace App;

class User
{
    protected $name;
    protected $lastname;

    public function setName(string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }
}