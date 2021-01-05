<?php

include("class.php");
$pdo = Connexion::connect('pinterest');
$login = new User();
$login->login($pdo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__logo">
                <i class="fab fa-pinterest"></i>
            </div>
            <nav class="header__nav">
                <ul>
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./register.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="register-login login">
        <div class="container">


            <form action="#" method="POST">
                <h1><i class="fab fa-pinterest-p"></i>interest</h1>
                <h2>Log in !</h2>
                <label for="username">Enter your username</label>
                <input type="text" name='username' id="username">
                <label for="password">Enter your password</label>
                <input type="password" name='password' id="password">
                <button type="submit" name='submit-login'>Login</button>
                <small>Not registered yet ? <a href="register.php">Register</a></small>
            </form>
        </div>
    </section>



</body>

</html>