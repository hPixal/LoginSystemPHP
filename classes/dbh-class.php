<?php
    class Dbh {
        protected function connect(){
            echo '<script>';
            echo 'console.log("HOLAAAAAAAAAAAAAAAAAAAA");';
            echo '</script>';
            try {
                print "holaaaaaa";
                $username = "postgres";
                $password = "";
                $dbh = new PDO('pgsql:host=localhost; dbname=ooplogin', $username, $password);
                return $dbh;

            } catch (PDOException $e) {
                //throw $e;
                print "Error!: ". $e->getMessage() . "<br/>";
                die();
            }
        }
    }
?>