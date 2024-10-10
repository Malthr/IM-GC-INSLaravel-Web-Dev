<?php
    class Frog extends animal{
        public $sound = "Hop Hop";
        public function jump(){
            return $this->sound;
        }
    }
?>