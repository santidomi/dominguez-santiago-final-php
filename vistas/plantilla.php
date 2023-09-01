<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>

<nav class="navegacion">
<ul>
  <li><a href="index.php?ruta=registro">Registro</a></li>
  <li><a href="index.php?ruta=ingreso">Ingreso</a></li>
  <li><a href="index.php?ruta=inicio">Inicio</a></li>
  <li><a href="index.php?ruta=salir">Salir</a></li>
</ul>
</nav>

<div class="marca">
</div>
</header>

<section class="contenido">
        <?php

        if (isset($_GET["ruta"])) {

            if (
                $_GET["ruta"] == "registro" ||
                $_GET["ruta"] == "ingreso" ||
                $_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "editar" ||
                $_GET["ruta"] == "salir"
            ) {

                include "paginas/" . $_GET["ruta"] . ".php";
            } else {
                include "paginas/error404.php";
            }
        } else {

            include "paginas/registro.php";
        }

        ?>

    </section>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="vistas/js/script.js"></script>

</body>

</html>