<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comunitarios</title>
  <link rel="icon" type="image/png" href="images/ISOTIPO.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <script src="js/script.js"></script>


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    * {
      padding: 0;
      margin: 0;
      text-decoration: none;
      list-style: none;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;

    }

    h1 {
      font-size: 3.5em;
    }

    h2 {
      font-size: 2.7em;
    }

    h3 {
      font-size: 2em;
    }

    p {
      font-size: 1em;
    }

    ul {
      list-style: none;
    }

    /* menu*/

    nav {
      background: while;
      height: 100px;
      width: 100%;

    }

    .enlace {
      position: absolute;
      padding: 20px 50px;
    }

    nav ul {
      float: right;
      margin: 10px;
    }

    nav ul li {
      display: inline-block;
      line-height: 80px;
      margin: 0 5px;
    }

    nav ul li a {
      color: #142f43;
      font-size: 18px;
      padding: 7px 13px;
      border-radius: 3px;
      text-transform: uppercase;
      font-family: 'Blogger', sans-serif;
    }

    a.active,
    li a:hover {
      background-color: #ffde59;
      transition: 1s;
    }

    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background-color: #ffffff;
    }

    article .fondo {
      background-image: url('Fondo.mp4');
      background-repeat: no-repeat;
      background-size: cover;
    }

    div,
    #presentacion {
      margin-left: 25px;
      margin-top: 25px;


    }

    main,
    div #fomacion {
      margin-top: 25px;
      background-color: #142f43;
    }

    body main {
      padding-left: 35px;
    }

    @media screen and (max-width: 600px) {
      .columnas {
        flex-basis: 100%;
      }
    }

    /* Estilos para las columnas */
    .columnas {
      margin-top: 25px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;

    }

    .columna {
      width: calc(33.33% - 20px);
      padding: 20px;
      border: 1px solid #ccc;
      margin: 10px;
      border-radius: 5px;
      max-width: 100%;
    }



    /* Estilos para los títulos de las columnas */
    h3 {
      margin-top: 0;
    }

    /* Estilos para las listas */
    ul,
    ol {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    li {
      margin-bottom: 5px;
    }


    /* main,
    article*/
    .presentacion {
      background-color: #142f43;
      /* color de respaldos */
    }

    img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>

<body>
  <nav>
    <img src="images/LOGO-COMUNIT.png" width="20%" height="20%" alt="logo">
    <ul>
      <li><a href="#presentacion">EmprendimientoS</a></li>
      <li><a href="#formacion">Inversión y impacto</a></li>
      <li><a href="#col1">Acesores y equipo</a></li>

    </ul>
  </nav>

  <article class="fondo">
    <video src="images/Puno.mp4" autoplay playinline loop muted preload="auto" width="100%" height="100%"></video>
  </article>

  <div style="color: #ff5757;" >
    <h2>Instituciones y aliados </h2>
  </div>
  <main>
    <div id="formacion">
      <table class="tabla">

        <tbody>
          <tr>
            <td><img src="images/Respaldos/Imagen1.png" alt="Imagen 1"></td>
            <td><img src="images/Respaldos/Imagen2.png" alt="Imagen 2"></td>
            <td><img src="images/Respaldos/Imagen3.png" alt="Imagen 2"></td>
            <td><img src="images/Respaldos/Imagen4.png" alt="Imagen 2"></td>


          </tr>
          <tr>
            <td><img src="images/Respaldos/Imagen5.png" alt="Imagen 2"></td>
            <td><img src="images/Respaldos/Imagen6.png" alt="Imagen 2"></td>
            <td><img src="images/Respaldos/Imagen7.png" alt="Imagen 2"></td>
            <td><img src="images/Respaldos/Imagen8.png" alt="Imagen 2"></td>


          </tr>
  
        </tbody>
      </table>

    </div>
  </main>


  <style>
    /* Estilos generales */
    body {
      font-family: Arial, sans-serif;
    }

    /* Estilos de la tabla */
    .tabla {
      width: 100%;
      border-collapse: collapse;
    }

    .tabla th,
    .tabla td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    /* Estilos responsivos */
    @media (max-width: 600px) {
      .tabla {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
      }

      .tabla th,
      .tabla td {
        white-space: normal;
        text-align: center;
      }
    }

    /*
      img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
      }*/
  </style>
<div style="color: #ff5757;" >
    <h2> Logros </h2>
    <img src="images/Logros.png" alt="">
  </div>

  <div style="color: #142f43;" >
  <p>Redes sosciales</p>
    <div>
      <tr>
        <td><a href="https://www.facebook.com/comunitarios.ft"><i class="fab fa-facebook"></i> </a></td>
        <td><a href="https://www.instagram.com/comunitarios.ft"><i class="fab fa-instagram"></i> </a></td>
        <td><a href="https://www.linkedin.com/company/comunitarios"><i class="fab fa-linkedin"></i></a></td>
      </tr>
    </div>
  </div>
    

  

</body>

</html>