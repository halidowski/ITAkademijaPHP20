<?php

class Product{  
    public $title;  
    public $price;

    public function construct($title, $price){ 
        $this->title = $title; $this->price = $price; 
    } 
        public function getInfo(){ 
            return "Title: {$this->title}, price: {$this->price}."; 
        }
    } 
    
    $p1 = new Product("Alcetel Idol 3", 320); 
    echo $p1->getInfo();

?>