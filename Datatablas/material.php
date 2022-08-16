<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   

<!--    Datatables  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
   <link rel="stylesheet" href="material.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.material.min.css">
   <link rel="stylesheet" href="css/modal.css">
   <link rel="stylesheet" href="css/formulario.css">
    <title></title>
  </head>
  <body>
    <h3>Influencers</h3>
      
    <h4>Alumnos</h4>
    
    <table id="example" class="mdl-data-table" style="width:100%">
        <thead>
            <tr><center>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Fecha Nacimiento</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <center><th>Accion</th>
                
            </tr>
        </thead>
        <?php
        
        include ('conexion.php');
         $query = 'SELECT * FROM datos_personales ';
         
         $result = pg_query($query) or die('Query failed: ' . pg_last_error());
         while ($mostrar=pg_fetch_array($result)) {
                $id=$mostrar['id'];
                $nombre=$mostrar['nombre'];
                $apellido=$mostrar['apellido'];
                $cedula=$mostrar['cedula'];
                $fecha_nacimiento=$mostrar['fecha_nacimiento'];
                $correo=$mostrar['correo'];
                $telefono=$mostrar['telefono'];
                $direccion=$mostrar['direccion'];
                                        
?>  


<tr>
             <center><td><?php echo $mostrar['nombres'] ?></td><center>
              <center><td><?php echo $mostrar['apellidos'] ?></td><center>
              <center><td><?php echo $mostrar['cedula'] ?></td><center>
              <center><td><?php echo $mostrar['fecha_nacimiento'] ?></td><center>
              <center><td><?php echo $mostrar['correo'] ?></td><center>
              <center><td><?php echo $mostrar['telefono'] ?></td><center>
              <center><td><?php echo $mostrar['direccion'] ?></td><center>
              <center><td>

<div>




    

 



    
  </div>

</div>



<div class="page">
        
    </div>

    <div class="fondo_transparente">
        <div class="modal">



<a href="#openModal">  
<button id='boton1'type= 'button' class="boton1"   title="REDES">REDES</button>
           
           


            <div id="openModal" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <center><h4>Redes</h4>
                    <hr>
<p><input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook" required></p>
<p><input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter" required></p>
<p><input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram" required></p>
<p><input type="text" class="form-control" id="tiktok" name="tiktok" placeholder="tiktok" required></p>
<p><input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube" required></p>
                </div>
            </div>

  
         

</div></td>
               
            </tr>

            

            <?php }?>    
          
            
        </tbody>
        <tfoot>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Fecha Nacimiento</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Accion</th>
            </tr>
        </tfoot>
    </table>
         
    <br>

    

<script src="modal/modal.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>     
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.material.min.js"></script>

   <script>  
$(document).ready(function() {
    $('#example').DataTable({ 
        "language": {
           "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
        
        });
});
 //Idiomas con el 2do método   
/* $(document).ready(function() {
  $('#example').DataTable({
    "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
         }
  });
}); */
</script>
      
      
  </body>
</html>



