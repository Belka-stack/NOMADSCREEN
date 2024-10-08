<?php

include('init.php');
// Vérifie si le formulaire a été posté

if ($_POST) {
    //Je récupère les infos correspondant à l'adresse mail dans la BD:
    $adresseMail = $pdo->query("SELECT * FROM utilisateurs WHERE email = '$_POST[email]'");

    // Si j'ai yn résultat ou plus c'est que le compte existe :
    if ($adresseMail->rowCount() >= 1) {
        // Le compte existe : 
        // Je mets sous forme d'array lesinfos de l'utilisateur :
        $users = $adresseMail->fetch(PDO::FETCH_ASSOC);

      
            // On enregistre les infos de l'email utilisateur
            $_SESSION['utilisateurs']['email'] = $users['email'];

            $content .= '<div class="verificationEmail"><p class="wrongEmail">We have just sent you an email to reset your password</p></div>';

    } else {
        // L'adresse mail n'existe pas:

        $content .= '<div class="verificationEmail"><p class="wrongEmail">Email address does not exist</p></div>';
    }
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

            background: black;
            color: hsl(49, 100%, 65%);
            font-weight: bolder;
            font-size: 1rem;
            border-radius: 10px;
            padding: 0.5rem;
            margin-top: 1rem;
            width: 10%;

        }

        .login:focus {
            background-color: brown;
        }

        .connexionForm a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            margin: 10px;

        }

        .verificationPassword, .verificationEmail {
            display: flex;
            justify-content: center;
        }

        .wrongPassword, .wrongEmail {
            background: hsl(49, 100%, 65%);
            width: auto;
            text-align: center;
            width: auto;
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
                <?php echo $content; ?>

                <div class="connexionForm">
                    <h1>ENTER YOUR EMAIL</h1>

                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>


                    <input type="submit" class="login" value="SUBMIT">
            

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