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