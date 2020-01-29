<?php 
    session_start();

    $email = isset($_SESSION['email'])? $_SESSION['email'] : 'Not Subscribed';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h3>Hello <?php echo $email ?> </h3>
</body>
</html>