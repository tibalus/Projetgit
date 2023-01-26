<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

         //connexion à la base de donnée
          include_once "connexion.php";
         //on récupère le id dans le lien
          $id = $_GET['id'];
          //requête pour afficher les infos d'un employé
          $req = mysqli_query($con , "SELECT nom_reseau,lien_reseau,actif_reseau FROM reseau WHERE id_reseau = $id");
          $row = mysqli_fetch_assoc($req);


       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($nom) && isset($lien)){
            
            if (isset($actif))
            {
               $actif = 1;
             }else
             {
               $actif = 0;
             }
               //requête de modification
               $req = mysqli_query($con, "UPDATE reseau SET nom_reseau = '$nom' , lien_reseau = '$lien' , actif_reseau = '$actif' WHERE id_reseau = $id");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: index.php");
                }else {//si non
                    $message = "Réseau non modifié";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier : <?=$row['nom_reseau']?> </h2>
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value=<?=$row['nom_reseau']?>>
            <label>Lien</label>
            <input type="text" name="lien" value=<?=$row['lien_reseau']?>>
            <label for="actif">Actif ?(0 ou 1)</label>
            <input type="checkbox" name="actif" value=<?=$row['actif_reseau']?>>
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>