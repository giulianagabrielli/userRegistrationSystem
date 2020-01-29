<?php

if(isset($_POST['login_user'])){
    session_start(); //Start the session

    $_SESSION['email'] = htmlentities($_POST ['email']);

    header('Location: afterLogin.php');

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <hr>
        <div class="header">
            <h2>Login</h2>
        </div>

        <form action="login.php" method="post">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password_1" required>
            </div>

            <button class="btn btn-primary" type="submit" name="login_user">Log In</button>
            <hr>
            <p>Already a user? <a href="registration.php"> <b>Register here</b> </a> </p>
        </form>
        <hr>
    </div>
    
</body>
</html>