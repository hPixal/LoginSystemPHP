<?php
    class Signup extends Dbh{
        protected function signUser($uid,$pwd,$email){
            $statement = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?,?,?);');

            $hashPWD = password_hash($pwd,PASSWORD_DEFAULT);

            if(!$statement->execute(array($uid,$hashPWD,$email))){
                $statement = null;
                header("location : ../index.php?error=stmtfailed");
                exit();
            }
            
            $statement = null;
        }

        protected function checkUser($uid,$email){
            echo '<script>';
            echo 'console.log("HOLAAAAAAAAAAAAAAAAAAAA");';
            echo '</script>';
            $statement = $this->connect()->prepare('SELECT users_id FROM users WHERE users_uid = ? OR users_email = ?;');
            echo '<script>';
            echo 'console.log("hola");';
            echo 'console.log("hola $statement");';
            echo '</script>';
            if(!$statement->execute(array($uid,$email))){
                $statement = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            $resultcheck = true;
            if($statement->rowCount()){
                $resultcheck = false;
            }
            
            return $resultcheck;
        }
    }

