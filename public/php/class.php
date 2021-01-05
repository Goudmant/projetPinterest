<?php
class connexion
{
    public static function connect($dbName)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=' . $dbName . ';charset=utf8', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'bonjour2';
        return $pdo;
        
    }
}


class User
{
    private 
    $username, 
    $name,
    $email, 
    $password, 
    $connected;


    public function registration($pdo)
    {
        if(isset($_POST['submit-register'])){
            echo 'bonjour';
            $sql = $pdo->prepare("INSERT INTO User VAlUES(NULL, '".$_POST['name']."', '".$_POST['username']."', '".$_POST['email']."','".$_POST['password']."')");
            $sql->execute();
            $sql->closeCursor();
            header('Location: ./login.php');
        }
    }

    public function login($pdo)
    {
        $msg = ""; 
        if(isset($_POST['submit-login'])) {
            session_start();
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
        if($username != "" && $password != "") {
            try {
                $query = "select DISTINCT * from `User` where username = '$username' and password= '$password'";
                $stmt = $pdo->prepare($query);
                //$stmt->bindParam('username', $username, PDO::PARAM_STR);
                //$stmt->bindValue('password', $password, PDO::PARAM_STR);
                $stmt->execute(array('username' => $username, 'password' => $password));
                $count = $stmt->rowCount();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
                    $_SESSION['id']   = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    header('Location: ./profil.php');
       
                } else {
                    $msg = "Invalid username and password!";
                }
            } catch (PDOException $e) {
                echo "Error : ".$e->getMessage();
            }
            } else {
                $msg = "Both fields are required!";
            }
        }
    }
}
?>