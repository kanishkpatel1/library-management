<?php

?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="./index.css"/>
    <title>Document</title>
</head>
<body>
    <div class='nav'>
        <div class="li">
            <a href="index.php" style="text-decoration:none; color:#fff; background-color:#24A0ED; border-radius:35px; padding:8px;" >Home</a>
            <a href="index.php" style="text-decoration:none; color:#fff; background-color:#24A0ED; border-radius:35px; padding:8px;">Login</a>
</div>
        <div class='name'><i class="fa fa-book"></i>Library Management System</div>
    </div>
    <div class='logback'><div class='box'>
        <div class='logname'>
        <i class="fa fa-user-circle-o"></i>
        </div>
        <form action="php.php" method="POST">
        <div class='linput'><i class="fa fa-user"></i><input type="text" name="first" placeholder="Enter your first name" required/></div>
        <div class='linput'><i class="fa fa-user"></i><input type="text" name="last" placeholder="Enter your last name" required/></div>
        <div class='linput'><i class="fda fa-user"></i><input type="text" name="user" placeholder="Create username" required/></div>
        <div class='linput'><span><i class="fa fa-eye-slash"></i></span><input required type="password" name="pass" placeholder="Create your password"/></div>
        <span>Already have an account?<a href="index.php" style="text-decoration:none; color:#CD295A;">Login</a></span>
        <button type="submit" name="submit1">Register</button>
        </form>
   </div></div>
</body>
</html>