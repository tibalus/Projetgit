<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="inscription.css" />
    <title class="titre" >Inscription</title>
</head>
<body>

  <div class="container">
    <h1>Inscription</h1>
    <p>OUI OUI il faut se faire un compte ! </p>
    <hr>

    <label class="titre" for="email"><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer nom d'utilisateur" name="email" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer mot de passe" name="psw" required>

    <label for="psw-repeat"><b>Confirmer le mot de passe</b></label>
    <input type="password" placeholder="Confirmer mot de passe" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> ce souvenir de moi
    </label>

    

    <div class="clearfix">
    <button class="cancelbtn" onclick="history.back();">Annuler</button>
      <button type="submit" class="signupbtn">S'inscrire</button>
    </div>
  </div>

</body>
</html>