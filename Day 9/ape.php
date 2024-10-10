<?php
    class Ape extends animal{
        public $leg = 2;
        public $sound = "Auooo";
        public function yell(){
            return $this->sound;
        }
    }
?>