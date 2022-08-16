<!DOCTYPE html>
<html lang="en">
  <link rel="shortcut icon" href="img/influye.ico">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escuela de Influencers</title>
  <link rel="stylesheet" href="css/css2.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body> 

<?php require ("menu.php");?><br><br> 
<?php require ("sesion.php");?>

  <br> <br><br><br><br><br><br> 

  
  
  <script src="js/main.js"></script>
</body>
<?php
unset($usu);
$usu1=$_GET["usu"];


      if($usu1<8){

      
    } else{

      require ("mensajes/usuario_incorrecto.php");

    }?>
<?php require ("footer.php");?>

</html>




