<?php
    class User{
        private $name;
        private $email;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
        }
        // construtor, set e gets, se necessário

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }
    }
?>