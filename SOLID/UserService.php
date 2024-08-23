<?php
    class UserService{
        private $userReposity;
        //construtores, set e gets, se necessário

        public function __construct(UserRepository $userReposity){
            $this->userRepository = $userReposity;
        }

        public function registerUser($name, $email){
            if($this->userRepository->getUserByEmail($email) === null){
                $user = new User($name, $email);
                $this->userRepository->addUser($user);
                return $user;
            }
            return null;
        }
    }
?>