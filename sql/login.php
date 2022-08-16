<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<link rel="stylesheet" href="toastr/toastr.min.css">
</html>

<?php
include ('conexion.php');
session_start();  

                         
                       $_SESSION['usuario']=$usuario;
?>


<?php


      
                  $usuario = $_POST['usuario'];
                  $contraseña = $_POST['contraseña'];
                

                  $query = "SELECT * from usuarios where '$usuario'=usuario and '$contraseña'=contraseña";
                  $result = pg_query($query) or die('PROBLEMAS CON LA CONEXION: ' . pg_last_error());



                   if(pg_num_rows($result)>0)

                   {
                         session_start();  

                         
                       $_SESSION['usuario']=$usuario;



                                                    

                              header("Location:../principal-alumno.php");  

                  
                      
                      }
                      

       
                   else{
                   	
                   
                      header("Location:../iniciar_sesión.php?usu=8");
                      
                   }

  ?>


  </body>
  </html>
