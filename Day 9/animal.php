<?php
class animal{
    public $leg = 4;
    public $cold_blooded = "Tidak";
    public $animal_name;
    public function __construct($animal_name){
        $this->animal_name = $animal_name;
    }

    public function getName(){
        return $this->animal_name;
    }
    public function getLegs(){
        return $this->leg;
    }
    public function getType(){
        return $this->cold_blooded;
    }
}
?>