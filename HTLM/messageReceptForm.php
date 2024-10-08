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
        .messageEnvoiForm{
            display: flex;
            text-align: center;
            height: 18rem;
        }
        .messageEnvoiForm p {
            padding-top: 2rem;
            font-size: 1.5rem;
        }

        .message1 {
            background-color:#ffde4d ;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        @media screen and (max-width: 768px) {

            .messageEnvoiForm p {
            padding-top: 2rem;
            font-size: 1rem;
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
        <div class="row messageEnvoiForm">
                <div class="col message1">
                    <h3>THANKS</h3>
                    <p>We have received your message. You will receive a response very soon.</p>
                    <p>The Nomadscreen Team</p>
    
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