<?php
    if(isset($_POST["signup"])){
        
        // This is where i grab the data in a signup

        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $rpwd = $_POST["rpwd"];
        $email = $_POST["email"];
        $eula = $_POST["eula"];
        //header("location: ../index.php?error=none");
                           
        // Instantiate a SignupContr class
        include "../classes/dbh-class.php";
        include "../classes/signup-class.php";
        include "../classes/signupCtrl-class.php"; 
        print "hello world1";
        $signup = new SignupContr($uid,$email,$eula,$pwd,$rpwd);
        print "hello world2";
        
        // Error handlers
        $signup->signupUser();
        print "hello world3";

        // Going back to the front page
        header("location: ../index.php?error=none");

    }else{
        header("location: ../index.php?error=FATAL");
    }
?>