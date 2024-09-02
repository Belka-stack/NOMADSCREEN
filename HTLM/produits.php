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
        .imgProduit {
            display: flex;
            justify-content: center;
        }

        .imgProduit img {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
                rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }
        .imgProduit a{
            background: #ffde4d;
            position: absolute;
            bottom: 2rem;
        }

        .card{
            height:600px;
        }
        /***** Media Querie *******/

        @media screen and (max-width: 768px) {
            .card {
                margin: 1rem;
            }
            .card{
            height:550px;
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
            <div class="row imgProduit">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="../image/imgPageAccueil/img1.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Four Display</h5>
                            <p class="card-text">Four Screen Laptop FHD Expansion Monitor with 1 Cable for 2 Displays for Windows, MacOS for 15-17.3 inch Laptop</p>
                            <a href="#" class="btn">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="../image/imgPageAccueil/main-image-4.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Three Display</h5>
                            <p class="card-text">Triple Screen Laptop FHD Expansion Monitor with 1 Cable for 2 Displays for Windows, MacOS for 15-17.3 inch Laptop</p>
                            <a href="#" class="btn">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="../image/imgPageAccueil/img3.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Two Display</h5>
                            <p class="card-text">Two Screen Laptop FHD Expansion Monitor with 1 Cable for 2 Displays for Windows, MacOS for 15-17.3 inch Laptop</p>
                            <a href="#" class="btn">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="../image/imgPageAccueil/img4.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Backpack</h5>
                            <p class="card-text">Here is our backpack. The stylish companion for your daily commute. Its sleek design is unique and it is made 100% from eco-responsible materials.</p>
                            <a href="#" class="btn">Add to cart</a>
                        </div>
                    </div>
                </div>


            </div>

        </main>
        <?php

        include('../view/footer.php')

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../JAVASCRIPT/script.js"></script>
</body>

</html>