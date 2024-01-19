<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progreso</title>
    <style>
.contenedor {
  float: left;
  width: 100px;
  height: 200px;
  position: relative;
}

        .cuerpo {
          width: 100px;
          height: 150px;
          background-color: #7FC7D9;
          position: absolute;
          top: 25px;
        }

        .tapa {
          width: 100px;
          height: 50px;
          background-color: #0F1035;
          border-radius: 50%;
          position: absolute;
          z-index: 100;
        }

        .progresoTapa {
          position: absolute;
          width: 100px;
          height: 50px;
          background-color: #DCF2F1;
          border-radius: 50%;
          top: 75px;
          z-index: 100;
        }

        .progreso {
          width: 100px;
          height: 70px;
          position: absolute;
          background-color: #365486;
          top: 100px;
        }

        .fondo {
          background-color: #365486;
          width: 100px;
          height: 50px;
          border-radius: 50%;
          position: absolute;
          top: 150px;
        }
    </style>
  </head>

  <body>
    <div class="horizontal">

      <div class="contenedor">
        <div class="cuerpo"></div>
        <div class="tapa"></div>
        <div class="progresoTapa" style="top: 150px"></div>
        <div class="progreso" style="top:150px; height:0"></div>
        <div class="fondo"></div>
      </div>
      <div class="contenedor">
        <div class="cuerpo"></div>
        <div class="tapa"></div>
        <div class="progresoTapa" style="top: 112px"></div>
        <div class="progreso" style="height: 40px; top: 137px;"></div>
        <div class="fondo"></div>
      </div>
      <div class="contenedor">
        <div class="cuerpo"></div>
        <div class="tapa"></div>
        <div class="progresoTapa"></div>
        <div class="progreso"></div>
        <div class="fondo"></div>
      </div>
    </div>
    <div class="contenedor">
      <div class="cuerpo"></div>
      <div class="progresoTapa" style="top:38px"></div>
      <div class="tapa"></div>
      <div class="progreso" style="top:63px; height: 110px"></div>
      <div class="fondo"></div>
    </div>
    <div class="contenedor">
      <div class="cuerpo"></div>
      <div class="progresoTapa" style="top:0px"></div>
      <div class="tapa"></div>
      <div class="progreso" style="top:30px; height: 140px"></div>
      <div class="fondo"></div>
    </div>
  </body>

</html>
