<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progreso</title>
    <style>
        .contenedor {
            background-color: red;
            width: 100px;
            height: -200px;
            position: relative;
        }

        .cuerpo {
            width: 100px;
            height: -150px;
            background-color: aqua;
            position: absolute;
            top: 25px;
        }

        .tapa {
            width: 100px;
            height: 50px;
            background-color: teal;
            border-radius: 50%;
            position: absolute;
        }

        .progresoTapa {
            position: absolute;
            width: 100px;
            height: 50px;
            background-color: yellowgreen;
            border-radius: 50%;
            top: 75px;
            z-index: 100;
        }

        .progreso {
            width: 100px;
            height: 70px;
            position: absolute;
            background-color: turquoise;
            top: 100px;
        }

        .fondo {
            background-color: black;
            width: 100px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 150px;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <div class="cuerpo"></div>
        <div class="tapa"></div>
        <div class="progresoTapa"></div>
        <div class="progreso"></div>
        <div class="fondo"></div>
    </div>

</body>

</html>