<?php
include ('conexion.php');
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$cedula =$_POST['cedula'];
$fecha =$_POST['fecha'];
$correo =$_POST['correo'];
$telefono =$_POST['telefono'];
$direccion =$_POST['direccion'];
$facebookper =$_POST['facebookper'];
$twitterper =$_POST['twitterper'];
$instagramper =$_POST['instagramper'];
$tiktokper =$_POST['tiktokper'];
$youtubeper =$_POST['youtubeper'];
$nombrerep= $_POST['nombrerep'];
$apellidorep =$_POST['apellidorep'];
$cedularep =$_POST['cedularep'];
$fecharep =$_POST['fecharep'];
$correorep =$_POST['correorep'];
$telefonorep =$_POST['telefonorep'];
$direccionrep =$_POST['direccionrep'];
$facebookrep =$_POST['facebookrep'];
$twitterrep =$_POST['twitterrep'];
$instagramrep =$_POST['instagramrep'];
$tiktokrep =$_POST['tiktokrep'];
$youtuberep =$_POST['youtuberep'];


$query="select cedula from datos_personales where cedula::INT=".$cedula;
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cedula_persona=pg_fetch_row($result);


if($cedula_persona[0] == $_POST['cedula']){
   

    header("Location:../inscripcion.php?usu=1");
     die;
     
       
            
     
     
     


}else{
      
        $query = "INSERT INTO datos_personales(nombres,apellidos,cedula,fecha_nacimiento,correo,telefono,direccion,facebook_persona,twitter_persona,instagram_persona,tiktok_persona,youtube_persona) VALUES ('$nombre','$apellido','$cedula','$fecha','$correo','$telefono','$direccion','$facebookper','$twitterper','$instagramper','$tiktokper','$youtubeper')";
        $result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());


        if($_POST['nombrerep']!= "" ){

            $query= "select id from datos_personales where cedula::INT=".$cedula;
            $result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
            $id_persona= pg_fetch_row($result);
            if($id_persona!="" || !is_null($id_persona) ){

            $query = "INSERT INTO datos_representate(id_persona,nombres,apellidos,cedula,fecha_nacimiento,correo,telefono,facebook,twitter,instagram,tiktok,youtube) VALUES ('$id_persona[0]','$nombrerep','$apellidorep','$cedularep','$fecharep','$correorep','$telefonorep','$facebookrep','$twitterrep','$instagramrep','$tiktokrep','$youtuberep')";
            $result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
        }
    }   

}


$cmdtuples = pg_affected_rows($result);
header("Location:../inscripcion.php?usu=2");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 
















