
<?php
require_once "C:\wamp\www\Projetgit\Vue\connect.php";
if(isset($_POST["submit"]))
{
    $username = $_POST['uname'];
    $pass = $_POST['psw'];
    if (!empty($_POST['uname']) AND !empty($_POST['psw']))
    {
        $sqlQuery = 'SELECT * FROM user WHERE username = :username';
        $hash = password_hash( $_POST['psw'], PASSWORD_DEFAULT);
        $sql = $con->prepare($sqlQuery);
        $sql->execute([
        'username' => $_POST['uname'],
        
        ]);
        $data = $sql->fetchAll();
       
        var_dump($data);
   
            if (!empty($data)) {
               
               if (password_verify($pass, $data[0]['pasword'])) {

                  session_start();
                  $_SESSION['id'] = $data[0]['id_user'];
                  $_SESSION['username'] = $username;
                  echo "Vous êtes connecté !";
                  header("location:collection.php");
               } else {
                  echo "Mauvais identifiant ou mot de passe !";
               }
            } else {
               echo "Aucun utilisateur ne correspond à ces informations de connexion";
            }
         
         
         
    }
}
?>               
