<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel= "stylesheet" href="style.css">
</head>
<body>
    <?php

    ?>
    <div class = "myBackground">

        <div class = "form-box">

            <div class = "button-box"> 
                <div id = "btn"></div>
                <button type="button" class="toggle-btn" onclick = "login()"> Log in </button>
                <button type="button" class="toggle-btn" onclick = "register()"> Sign up </button>
            </div>

            <form id = "login" class = "input-group">
                <input type="text" class="input-field" name="uid" placeholder="User ID" >
                <input type="text" class="input-field" name="pwd" placeholder="Password" >
                <input type="checkbox" class="checkbox" name="rmber" > <span> Remember password </span>
                <button type="submit" class="submit-btn" name="login" > Log in </button>
            </form>

            <form action = "includes/signup-inc.php" id = "register" class = "input-group" method="post">
                <input type="text" class="input-field"  name="uid" placeholder="User ID" >
                <input type="email" class="input-field"  name="email" placeholder="E-Mail" >
                <input type="text" class="input-field"  name="pwd" placeholder="Password" >
                <input type="text" class="input-field"  name="rpwd" placeholder="Repeat Password" >
                <input type="checkbox" class="checkbox" name="eula" > <span> I agree with the <u>Terms And Conditions</u> </span>
                <button type="submit" class="submit-btn" name="signup"> Sign up </button>
            </form>

        </div>

    </div>

    <script>
        var log = document.getElementById("login");
        var reg = document.getElementById("register");
        var but = document.getElementById("btn");
        
        function register(){
            log.style.left = "-400px";
            reg.style.left = "50px";
            but.style.left = "110px";
        }

        function login(){
            log.style.left = "50px";
            reg.style.left = "450px";
            but.style.left = "0px";
        }

    </script>

</body>
</html>
