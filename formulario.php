



<link rel="stylesheet" href="css/formulario.css">

<div class="login">
<h3 class="login-header">Datos Personales</h3>

  
<form class="login-container" method="post"action="sql/validacion.php" novalidate>
<p><input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" required></p>
<p><input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required></p>
<p><input type="textarea" class="form-control" id="cedula" name="cedula" placeholder="Cedula" required></p>
<p><input type="date" class="form-control" id="fecha" name="fecha" placeholder="Dirreccion" required></p>
<p><input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required></p>
<p><input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required></p>
<p><textarea class="form-control" placeholder="Direccion" id="direccion" name="direccion" aria-label="With textarea"></textarea required></p>


</div>
<div class="login" id="representante" style="display: none" >
    <h3 class="login-representate">Datos Representante</h3>

    <div class="login-container">
        <p><input type="text" class="form-control" id="nombrerep" name="nombrerep" placeholder="Nombres" required></p>
        <p><input type="text" class="form-control" id="apellidorep" name="apellidorep" placeholder="Apellidos" required></p>
        <p><input type="textarea" class="form-control" id="cedularep" name="cedularep" placeholder="Cedula" required></p>
        <p><input type="date" class="form-control" id="fecharep" name="fecharep" placeholder="fecha" required></p>
        <p><input type="email" class="form-control" id="correorep" name="correorep" placeholder="Correo" required></p>
        <p><input type="text" class="form-control" id="telefonorep" name="telefonorep" placeholder="Telefono" required></p>
        <p><input type="text" class="form-control" id="facebookrep" name="facebookrep" placeholder="facebook" required></p>
        <p><input type="text" class="form-control" id="twitterrep" name="twitterrep" placeholder="twitter" required></p>
        <p><input type="text" class="form-control" id="instagramrep" name="instagramrep" placeholder="instagram" required></p>
        <p><input type="text" class="form-control" id="tiktokrep" name="tiktokrep" placeholder="tiktok" required></p>
        <p><input type="text" class="form-control" id="youtuberep" name="youtuberep" placeholder="youtube" required></p>


        <p><input type="submit" value="Registrar"></p>
    </div>

</div>
<div class="login" id="redes-sociales" style="display: none" >
  
  <h3 class="login-redes">Redes</h3>

  <div class="login-container">
<p><input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook" required></p>
<p><input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter" required></p>
<p><input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram" required></p>
<p><input type="text" class="form-control" id="tiktok" name="tiktok" placeholder="tiktok" required></p>
<p><input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube" required></p>


<p><input type="submit" value="Registrar"></p>
  </div>

</div>

</form>  


<script src="js/jquery-3.3.1.slim.min.js"></script>
                      <script src="js/jquery.js"></script>
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

                 $("#representante").removeAttr("style");
                 $("#redes-sociales").css("display","none");

             }else {

                 $("#representante").css("display","none");
                 $("#redes-sociales").removeAttr("style");

             }
         }

     </script>


</div>
  
                

</div>






