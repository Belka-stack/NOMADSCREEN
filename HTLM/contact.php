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

    .contactForm {
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

    .contactForm input {
      padding: 1rem;
      margin: 1rem;
      width: 25%;

    }

    .contactForm textarea {
      width: 25%;
      margin: 1rem;
    }



    @media screen and (max-width: 768px) {
      form h1 {
        font-size: 1rem;
      }

      .contactForm input {
        padding: 0.5rem;
        width: 50%;
      }

      .contactForm textarea {
        width: 50%;
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
      <?php

      // Je meconnecte à la base de données

      $pdo = new PDO('mysql:host=localhost;dbname=nomadscreen', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
      // Test de connection à BD
      // var_dump($pdo);

      if ($_POST) {
        // Je vérifie si le formulaire se soumet 
        // echo 'test';

        // Je gère le soucis d'apostrophe pour éviter les insertion SQL et les erreurs due aux apostrophes
        $_POST['prenom'] = addslashes($_POST['prenom']);
        $_POST['nom'] = addslashes($_POST['nom']);
        $_POST['email'] = addslashes($_POST['email']);
        $_POST['message'] = addslashes($_POST['message']);

        $pdo->exec("INSERT INTO formulaire_contact (prenom, nom, email, message) VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[email]', '$_POST[message]')");


      }

      

      ?>
      <form method="post">
        <h1>CONTACT-US</h1>
        <div class="contactForm">

          <input type="text" class="form-control" name="prenom" placeholder="First name" required>


          <input type="text" class="form-control" name="nom" placeholder="Last name" required>


          <input type="email" class="form-control" name="email" placeholder="name@example.com" required>

          <textarea class="form-control" name="message" rows="3" placeholder="Your message" required></textarea>

          <input type="submit" class="btn btn-dark" value="Submit">

        </div>
      </form>
    </main>
    <?php
    include('../view/footer.php');
    ?>
  </div>
  <script src="../JAVASCRIPT/script.js"></script>
</body>

</html>