<?php
    session_start();

    $email = $_SESSION['email'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subscribed</title>
</head>
<body>
    <h5>Thank you. You have subscribed with the email <?php echo $email ?></h5>
    <a href="login.php">Go to Login</a>
</body>
</html>