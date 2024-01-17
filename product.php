<?php
class product {
    public $name;
    public $type;
    public $category;
    public $price;

    public function __construct($_name , $_type , $_category , $_price)
    {
       $this->set_name($_name);
       $this->set_type($_type);
       $this->set_category($_category);
       $this->set_price( $_price);
    }

    //getters
    public function get_name(){
        return $this->name;
    }
    public function get_type(){
        return $this->type;
    }
    public function get_category(){
        return $this->category;
    }
    public function get_price(){
        return $this->price;
    }
    

    //setters
    public function set_name($_name){
        $this->name = $_name ;
    }
    public function set_type($_type){
        $this->type = $_type ;
    }
    public function set_category($_category){
        $this->category = $_category ;
    }
    public function set_price($_price){
        $this->price = $_price ;
    }
    




    }

class food extends product {
    public $name = 'croccantini';
}
