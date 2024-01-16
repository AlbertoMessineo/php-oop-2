<?php
class product {
    public $name;
    public $type;

    public function __construct($_name , $_type)
    {
       $this->name =$_name;
       $this->type =$_type;
    }
    }
class food extends product {
    public $name = 'croccantini';
}
