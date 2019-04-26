<?php

namespace App;


class Product
{
    private $name;
    private $owner;

    public function __construct(String $name, User $owner)
    {
        $this->name = $name;
        $this->owner = $owner;
    }

    public function hasName() {
        return $this->name != "";
    }

    public function isValid() {
        return $this->hasName() && $this->owner->isValid();
    }

    public function setName(String $name) {
        $this->name = $name;
    }

    public function getowner() {
        return $this->owner;
    }

    public function setowner(User $owner) {
        $this->owner = $owner;
    }
}