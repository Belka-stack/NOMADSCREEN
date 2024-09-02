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

        .blockImage img {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
                rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        .imgProduit img {
            width: 100%;
            margin-top: 8rem;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
                rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php
        include('../view/header.php');
        ?>
        <main>
            <div class="blockImage">

                <img width="100%" src="../image/imgPageAccueil/hand.jpg" alt="image de main avec carte du monde déssinée dessus sur fon d de ciel bleu et nuageux" />

            </div>

            <div class="row imgProduit">
                <div class="col-12 col-md-6 col-lg-3">
                    <img src="../image/imgPageAccueil/img1.jpeg" alt="" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img src="../image/imgPageAccueil/main-image-4.jpeg" alt="" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img src="../image/imgPageAccueil/img3.jpeg" alt="" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img src="../image/imgPageAccueil/img4.jpeg" alt="" />
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