<?php
  session_start();
  include_once("seguranca.php");
  include_once("conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cozinha do Mineiro</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7-dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7-dist/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.7-dist/css/carousel.css" rel="stylesheet">
  </head>

  <body>


    <?php
        include_once("barra_menu.php");

      $link = $_GET["link"];

      $pag[1]  = "bem_vindo.php";
      $pag[3]  = "cad_usuario.php";
      $pag[3]  = "pedidos.php";
      
      if(!empty($link)){
        if(file_exists($pag[$link])){
        include $pag[$link];
      }else{
        include "bem_vindo.php";
      }
      } else{ include "bem_vindo.php";

      }
      
    ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-3.3.7-dist/js/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap-3.3.7-dist/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7-dist/js/ie10-viewport-bug-workaround.js"></script>
  </body>