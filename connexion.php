
<?php
session_start();
require_once "C:\wamp\www\Projetgit\Vue\connect.php";
if(isset($_POST["submit"]))
{
    $username = $_POST['uname'];
    $pass = $_POST['psw'];
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $con->prepare($sql);
    $result->execute();

    if($result->num_rows > 0)
    {
        $data = $result->fetchAll();
        if(password_verify($pass,$data[0]["psw"]))
        {
            $_SESSION['uname'] = $username;
        }
        else{
            echo"Mot de passe ou Username INCORRECT";
            }
    }
}

?>
