<?php
session_start();
require_once "C:\wamp\www\Projetgit\Vue\connect.php";
if(isset($_POST["submit"]))
{
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql="INSERT INTO user VALUES(NULL,'$username', '$password')";
    $result = $con->prepare($sql)->execute();

    if($result){//si la requête a été effectuée avec succès , on fait une redirection
        header("location:index.php");
    }else {//si non
        $message = "Réseau non ajouté";
    }
}   
?>