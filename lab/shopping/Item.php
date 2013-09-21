<?php

class Item
{
    protected $description;
    protected $id;
    protected $price;

    public function getDescription(){ return $this->description; }
    public function getId(){ return $this->getId; }
    public function getPrice(){ return $this->price; }

    public function setDescription($description){ $this->description = $description; }
    public function setId($id){ $this->id = $id; }
    public function setPrice($price){ return $this->price = $price; }
}
