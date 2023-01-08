<?php

class Product
{

    public $id;
    public $name;
    public $description;
    public $price;
    public $user_id;

    public function __construct($id, $name, $description, $price, $user_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->user_id = $user_id;
    }

    
}

