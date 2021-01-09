<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 
        $msg = "";
        //Check if the user is already logged in, if yes then redirect him to welcome page
        if(isset($_SESSION["id"]) && $_SESSION["username"] == true){
            
            //header("location: profile.php");
?>
<body>
            <h2>Profil</h2>
            <p>username:   <?php echo $_SESSION['username'];?>
            <p>password:   <?php echo $_SESSION['password'];?>
            echo '<th style="border: 1px solid black"><a href="./update.php?id='.$donnees['id'].'">upadate</a></th>';
<?php
        }
        else{
?>
            <h2>You are not connected!</h2>
            <p>Please try to <a href="registration/login.php"> login</a> or <a href="registration/registration.php">register</a></p>
<?php }?>

</body>
</html>