<?php
include_once(__DIR__. "/partials/functions.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>


    <section class="py-5">
        <?php if (isset($_SESSION["pass_length"])) :?>
        <h2 class="text-secondary text-center">Ecco la tua password casuale di
            <?php echo $_SESSION["pass_length"] ?> caratteri
        </h2>
        <p class="h1 text-center">
            <?php
                $password_length = $_SESSION["pass_length"];
                echo generateRandomPassword($password_length) ;
              ?>
        </p>

        <?php endif; ?>
    </section>



</body>

</html>