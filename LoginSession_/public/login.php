<?php
require_once('config.php');
session_start();

if (isset($_POST['Submit'])) {
    if ($_POST['Username'] == $username && $_POST['Password'] == $password) {
        $_SESSION['Username'] = $username;
        header("location:index.php");
        exit;
    } else {
        echo 'Incorrect Username or Password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>
<body>
    <div class="container">
        <form class="form-signin" method="post" action="">
            <h2 class="form-signin-heading">Login</h2>
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" id="inputUsername" name="Username" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="Submit">Sign in</button>
        </form>
    </div>
</body>
</html>

