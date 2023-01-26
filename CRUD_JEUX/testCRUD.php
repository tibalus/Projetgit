<!-- Menu de navigation -->
<!DOCTYPE html>
<html>
<head>
</head>
<body class="crouss" background="jpg/sunset-4047944.jpg"  bgproperties="fixed">
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="css/styles2.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">


</body>
</html>


<!-- Formulaire connexion -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <meta charset="utf-8">


<button class="btncréa" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Se pré-inscrire</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Reseau</b></label>
      <input type="text" id="nom_reseau" placeholder="Entrer le reseau" name="reseau" required>

      <label for="uname"><b>Lien</b></label>
      <input type="text" id="lien_reseau" placeholder="Entrer le lien du reseau" name="lien" required>

       <label for="uname"><b>Actif ?(0 ou 1)</b></label>
      <input class="container2" id="actif_reseau" placeholder="Entrer l'état du reseau" name="actif" type="number" step="1" min="0" max="99" required>
        
      <button class="btnfin" name="formsend" id="formsend" type="submit">Ajouter</button>

      <button class="btnfin" type="reset" VALUE=" Annuler ">Annuler</button>


    </div>
  

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Retour</button>
    </div>

  <?php

  if(isset($_POST['formsend'])){

    extract($_POST);

    if(!empty($reseau) && !empty($lien) && !empty($actif))

    include 'db.php';
    global $db;

    $c = $db->prepare("SELECT nom_reseau,lien_reseau,ctif_reseau FROM reseau WHERE nom_reseau = :nom_reseau");
    $c->execute(['nom_reseau' => $reseau]);

  
  $q = $db->prepare("INSERT INTO reseau(nom_reseau,lien_reseau,actif_reseau) VALUES(:nom_reseau,:lien_reseau,:actif_reseau)");
       $q->execute([
        'nom_reseau' => $reseau,
        'lien_reseau' => $lien,
        'actif_reseau' => $actif
    ]);
       

    }                                                                                                                          

?>


  </form>
  
</div>

<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
</body>
</html>




