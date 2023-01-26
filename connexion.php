
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
    if(isset($_POST['uname']) && ($_POST['psw']))
    {
        $user_check = ("SELECT COUNT(*) FROM user WHERE username = '".$_POST['uname']."' AND passwd = '" .($_POST['psw']) . "'");
        $result = $con->prepare($user_check);
        $result->execute();
        if($result)
        {
            header("collection.php");
            $_SESSION['uname'] = $username;
        }
        else{
            $message="Mot de passe ou Username INCORRECT";
            }
    }
}
?>
