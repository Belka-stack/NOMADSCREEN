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


        @media screen and (max-width: 768px) {}
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php
        include('../view/header.php');
        ?>
        <main>
            <div class="row messageEnvoiForm">
                <div class="col">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        
                        <input type="submit" value="Log in">
                    </form>

                    <!-- <form method="post">
                        <input type="email" name="email" placeholder="Adresse mail">
                        <br><br>
                        <input type="password" name="mdp" placeholder="Mot de passe">
                        <br><br>
                        <input type="submit" value="Se connecter">
                    </form> -->

                </div>
            </div>
        </main>
        <?php

        include('../view/footer.php')

        ?>
    </div>
    <script src="../JAVASCRIPT/script.js"></script>
</body>

</html>