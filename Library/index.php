<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="../Library/index.css"/>
    <title>Document</title>
</head>
<body>
    <div class='nav'>
    <div class="li">
            <a href="index.php" style="text-decoration:none; color:#fff; background-color:#24A0ED; border-radius:35px; padding:8px;" >Home</a>
            <a href ="signup.php" style="text-decoration:none; color:#fff; background-color:#24A0ED; border-radius:35px; padding:8px;">Signup</a>
</div>
        <div class='name'><i class="fa fa-book"></i>Library Management System</div>
    </div>
    <div class='logback'><div class='box'>
        <div class='logname'>
        <i class="fa fa-user-circle-o"></i>
        </div>
        <form action="php.php" method="POST">
        <div class='linput'><i class="fa fa-user"></i><input type="text" name="username"  placeholder="Enter the username" required/></div>
        <div class='linput'><span><i class="fa fa-eye-slash"></i></span><input required type="password" name = "password" placeholder="Enter the password"/></div>
        <span>Dont have an account? <a href="signup.php" style="text-decoration:none; color:#CD295A;">Signup</Link></span>
        <button type="submit" name="submit">Submit</button>
        </form>
   </div></div>
</body>
</html>