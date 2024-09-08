<?php
include('init.php');

// Si l'utilisateur est déjà connecté pour empêchet d'accéder à inscription via l'url à d'autres pages:
if(isset($_SESSION['utilisateurs']))
// Je redirige l'utilsateur vers l'espace client:

header('location:profile.php');

// On vérifie si le formualire a été posté

if($_POST){
  // Je vérifie que je récupère bien les infos

  // print_r($_POST);

  // Je défini  une variable pour  stocker les messges d'erreur:

  $erreur = '';

  // Je vérifie si le prenom est trop court ou trop long:
    if(strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 20 || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20){
      $erreur .= '<div class="textErreur"><p class="verifLongueur">Your first or last name is too short or too long. Three words minimum and twenty words maximum.</p></div>';
  }

  // Je vérifie si l'email n'existe pas déjà dans ma base quand la personne a validé le formaulaire

  $verifMail = $pdo->query("SELECT * FROM utilisateurs WHERE email = '$_POST[email]'");
  if($verifMail->rowCount() >= 1){
    $erreur .= '<div class="verification"><p class="dejaInscrit">Your email address is already in use.</p></div>';
  }

  // Pour chaque champs,je gère les soucis d'apostrophe. $indice sont les names,$valeur est la valuer du champ name:

  foreach($_POST as $indice => $valeur){
    $_POST[$indice] = addslashes($valeur);
  }

  // Je hash le mot de passe avant d'insérer le mot de pass dans la BD:
  $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

  // Si la variable erreur est vide:

  if(empty($erreur)){
    // Je fais ma requête d'insertion :
    $pdo->exec("INSERT INTO utilisateurs (nom,prenom,email,password) VALUES ('$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[password]')
    -- Dans les parenthèses pas besoin de mettre l'id_commentaire et il n'y a pas d'ordre. Il faut juste que l'odre dans value doit être respecté.
    ");
    $content .= '<div class="validationEnvoi"><p class="inscript">Registration validated!</p></div>';

  }



  $content .= $erreur;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=he, initial-scale=1.0" />
  <title>Document</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <style>
    main {
      margin-top: 8rem;
    }

    .registreForm {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
    }

    form h1 {
      text-align: center;
      margin: 1rem;
      font-size: 1.5rem;
    }

    .registreForm .form-control {
      padding: 0.5rem;
      margin: 0.5rem;
      width: 25%;

    }

    .registreForm:focus {
      outline: none;
      /* Supprime l'outline par défaut */
      outline: 3px solid hsl(49, 100%, 65%);
      /* Change la couleur et la largeur de l'outline */

    }

    .registreSubmit {
      background: hsl(49, 100%, 65%);
      color: black;
      font-weight: bolder;
      font-size: 1rem;
      border-radius: 5px;
      border: solid hsl(49, 100%, 65%);
      padding: 0.5rem;
      margin-top: 1rem;
      width: 10%;

    }

    .textErreur, .validationEnvoi, .verification {
      display: flex;
      justify-content: center;
    }

    .verifLongueur, .inscript, .dejaInscrit{
      background: hsl(49, 100%, 65%);
      width: auto;
      text-align: center;
      width: auto;
    }


    @media screen and (max-width: 768px) {

      form h1 {
        font-size: 1rem;
      }

      .registreForm .form-control {
        padding: 0.5rem;
        margin: 1rem;
        width: 70%;
      }

      .registreSubmit{
        width: 25%;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <?php
    include('../view/header.php');
    ?>
    <main>
    
      <form method="post">
      <?php echo $content; ?>
        <h1>REGISTER</h1>
        <div class="registreForm">

          <input type="text" class="form-control" name="prenom" placeholder="First name" required>


          <input type="text" class="form-control" name="nom" placeholder="Last name" required>


          <input type="email" class="form-control" name="email" placeholder="name@example.com" required>

          <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>


          <input type="submit" class="registreSubmit" value="SUBMIT">

        </div>
      </form>
    </main>
    <?php

    include('../view/footer.php')

    ?>
  </div>
  <script src="../JAVASCRIPT/script.js"></script>
</body>

</html>