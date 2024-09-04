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

        .connexionForm {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }


        form h1 {

            margin: 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .connexionForm .form-control {
            padding: 0.5rem;
            margin: 0.5rem;
            width: 25%;

        }

        .form-control:focus {
            outline: none;
            /* Supprime l'outline par défaut */
            outline: 3px solid hsl(49, 100%, 65%);
            /* Change la couleur et la largeur de l'outline */

        }

        .login {

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

        .connexionForm a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            margin: 10px;

        }
        
        @media screen and (max-width: 768px) {
            form h1 {
                font-size: 1rem;
            }

            .connexionForm .form-control {
                padding: 0.5rem;
                margin: 1rem;
                width: 50%;
            }
            .login {
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

                <div class="connexionForm">
                    <h1>LOG IN</h1>

                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>

                    <input type="password" class="form-control" name="mdp" placeholder="Password" required>

                    <input type="submit" class="login" value="SUBMIT">
                    <a href="forgotPassword.php">Forgotten password ?</a>
                    <a href="inscription.php">Register</a>

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