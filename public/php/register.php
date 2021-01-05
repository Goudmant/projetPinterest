<?php
    include("class.php");
    $pdo = Connexion::connect('pinterest');
    $register = new User();

    $register->registration($pdo);
    //$connected = $login->login($pdo, 'antoinej', 'azerty', 'antoine@gmail.com', 0);

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
                    <li><a href="./login.html">Login</a></li>
                    <li><a href="./register.html">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="register-login register">
        <div class="container">


            <form action="" method="post">
                <h1><i class="fab fa-pinterest-p"></i>interest</h1>
                <h2>Register with us !</h2>
                <label for="name">Enter your name</label>
                <input type="text" name='name'id="name">
                <label for="email">Enter your email</label>
                <input type="text" name='email'id="email">
                <label for="username">Choose a username</label>
                <input type="text" name='username' id="username">
                <label for="password">Choose a password</label>
                <input type="password" name='password' id="password">
                <button type="submit" name='submit-register'>Register</button>
                <small>Already registered ? <a href="./login.php">Login</a></small>
            </form>
        </div>
    </section>



</body>

</html>