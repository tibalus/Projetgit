<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Réseau</title>
    <link rel="stylesheet" href="style.css">
    
    <script language="JavaScript">
function verif(){
   if(confirm("Etes-vous sûr de vouloir supprimer ce réseau")){
        return true;
   }
      else{
        event.preventDefault();
      }

}
                
</script>
</head>

<body>
    
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images\plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Lien</th>
                <th>Actif</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste
                $req = mysqli_query($con , "SELECT * FROM reseau");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas de reseau dans la base de données , alors on affiche ce message :
                    echo "Il n'y a pas encore de réseau à ajouter !" ;
                    
                }else {
                    //si non , afficher la liste
                    ?>
                    <form method="get" action="supprimer.php" name="validation">
                    <?php 
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['nom_reseau']?></td>
                            <td><?=$row['lien_reseau']?></td>
                            <td><?=$row['actif_reseau']?></td>
                            <!--Nous allons mettre l'id de chaque réseau dans ce lien -->
                            <td><a href="modifier.php?id=<?=$row['id_reseau']?>"><img src="images\pen.png"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id_reseau']?>"><img src="images/trash.png" onClick="verif()" type="button"></a></td>
                            
                        
                        </tr>
                        <?php
                    }?>
                    
                    </form>
                    <?php

                }
            ?>
      
         
        </table>
   
   
   
   
    </div>
</body>
</html>