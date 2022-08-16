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
  <?php require ("menu.php");?>
<br>
</head>

<body>

<br>
<?php include ("formulario.php");?>

<br><br> <br>  

                     
<?php include (".php");?>
             
                     
                     
                   
</body>
<?php
unset($usu);
$usu1=$_GET["usu"];


      if($usu1==1){

        
         require ("mensajes/alumno_registrado.php");
        
    } 
else

  if($usu1==2){


    require ("mensajes/alumno_registrado_exito.php");

  

}
      
      

    ?>

<?php require ("footer.php");?>
</html>



