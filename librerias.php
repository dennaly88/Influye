
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>intranet</title>
<?php
       include ('sql/conexion.php');
?>



<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<hr>
<body style="background-color:black;">
 <center><br><br>
<div class="card w-50 border-dark">
  <div class="card-header border-info text-white bg-info mb-3">
    <center>Datos Personales
  </div>
  <div class="card-body">


  

</div><br> <br>




                      <script src="js/jquery-3.3.1.slim.min.js"></script>
                      <script src="js/bootstrap.min.js"></script>
                      <script src="js/bootstrap.js"></script>
                      <script src="js/jquery.js"></script>
                      <script src="js/popper.min.js"></script>
                      <script src="js/scrollreveal.js"></script>
                      <script src="js/main.js"></script>


     <script>
         $(function(){
             $('#fecha').on('change', calcularEdad);
         });

         function calcularEdad() {

             fecha = $(this).val();
             var hoy = new Date();
             var cumpleanos = new Date(fecha);
             var edad = hoy.getFullYear() - cumpleanos.getFullYear();
             var m = hoy.getMonth() - cumpleanos.getMonth();

             if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                 edad--;
             }

             if(edad < 15){
                 $(".datos-representante").removeAttr("style");
                 $(".redes-sociales").css("display","none");

             }else {
                 $(".datos-representante").css("display","none");
                 $(".redes-sociales").removeAttr("style");

             }
         }

     </script>


