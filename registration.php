<?php

require_once "models/User.php";

$user = new User();

if(isset($_POST['email'])){
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['email']);

    $user->register($email, $password);

    header('Location: afterRegistration.php');
}
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>

    <div class="container">
        <hr>
        <div class="header">
            <h2>Registration</h2>
        </div>

        <form action="registration.php" method="post">

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <!-- <div class="form-group">
                <label for="password">Confirm Password</label>
                <input class="form-control" type="text" name="password_2" required>
            </div> -->

            <button class="btn btn-primary" type="submit">Submit</button>
            <hr>
            <p>Already a user? <a href="login.php"> <b>Log in</b> </a> </p>
        </form>
        <hr>
    </div>
    
</body>
</html>