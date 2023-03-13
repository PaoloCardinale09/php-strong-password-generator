<?php

include_once(__DIR__. "/partials/functions.php");
    
    // Esempio di utilizzo per generare una password casuale di lunghezza 8
    if(isset($_GET["pass-length"])){
        
        $password_length = $_GET["pass-length"];
        session_start();
        $_SESSION["prova"] = $password_length ;
        header("Location: ./result.php");
       
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center text-primary pt-5">Generatore di password</h1>

        <form method="GET" class="row g-3 py-5">
            <div class="col-12">
                <label for="pass-length" class="form-label"></label>
                <input name="pass-length" type="number" class="form-control" id="pass-length"
                    placeholder="Inserire la lunghezza della password da generare">
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">GENERA</button>
            </div>
        </form>
        <section>
            <?php if (isset($_GET["pass-length"])) :?>
            <h2 class="text-secondary text-center">Ecco la tua password casuale di
                <?php echo $_GET["pass-length"] ?> caratteri
            </h2>
            <p class="h1 text-center">
                <?php
                $password_length = $_GET["pass-length"];
                echo generateRandomPassword($password_length) ;
              ?>
            </p>

            <?php endif; ?>
        </section>
    </div>

</body>

</html>

<!-- Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale -->