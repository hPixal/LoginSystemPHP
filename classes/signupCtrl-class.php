<?php
    class SignupContr extends Signup{
        private $uid;
        private $email;
        private $eula;
        private $pwd;
        private $rpwd;

        public function __construct($uid,$email,$eula,$pwd,$rpwd)
        {
            $this->uid = $uid;
            $this->pwd = $pwd;
            $this->rpwd = $rpwd;
            $this->eula = $eula;
            $this->email = $email;
        }

        public function signupUser(){

            print "$this->uid $this->pwd $this->rpwd $this->eula $this->email";
            print "paso1";
            if($this->fullImput() == false){
                header("location: ../index.php?error=emptyinput");
                exit();
            }
            print "paso2";

            if($this->validUID() == false){
                header("location: ../index.php?error=invaluduid");
                exit();
            }
            print "paso3";

            if($this->pwdMatch() == false){
                header("location: ../index.php?error=pwdmatch");
                exit();
            }
            print "paso4";

            if($this->validMail() == false){
                header("location: ../index.php?error=email");
                exit();
            }
            print "paso5";

            if($this->uidTaken() == false){
                header("location: ../index.php?error=uidtaken");
                exit();
            }
            print "paso6";
            $this->signUser($this->uid,$this->pwd,$this->email);
        }

        private function fullImput(){
            $result = true; 
            if(empty($this->uid) || empty($this->pwd) || empty($this->rpwd) || empty($this->email) || empty($this->eula) ){
                $result = false;
            }
            return $result;
        }

        private function pwdMatch(){
            $result = true;
            if($this->pwd !== $this->rpwd){
                $result = false;
            }
            return $result;
        }

        private function validUID(){
            $result = true;
            if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
                $result = false;
            }
            return $result;
        }

        private function validMail(){
            $result = true;
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL )){
                $result = false;
            }
            return $result;
        }

        private function uidTaken(){
            $result = true;
            if(!$this->checkUser($this->uid,$this->email)){
                $result = false;
            }
            return $result;
        }
    }
