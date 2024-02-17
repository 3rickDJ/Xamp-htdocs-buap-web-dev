<?php
include "seguridad.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><?php echo $user; ?></h1>
                <br>
            </div>
            <div class="col text-end">
                <a href="salir.php" class="btn btn-danger">Salir</a>
            </div>
        </div>
    </div>
</body>

</html>