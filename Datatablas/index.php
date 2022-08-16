<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/> 
    <link rel="stylesheet" href="css/estilos2.css"> 
    <title></title>
  </head>
  
<body>
    
    
    <div class="container">
       <div class="row">
           <div class="col-lg-16"><br><br>
           <table id="example" class="table table-striped table-bordered" style="width:150%">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cedula</th>
                        <th>Fcha </th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Accion</th>
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
                    
                       
        
                        
                                      
        ?> 
        
        


        <tr>
             <center><td><?php echo $mostrar['nombres'] ?></td><center>
              <center><td><?php echo $mostrar['apellidos'] ?></td><center>
              <center><td><?php echo $mostrar['cedula'] ?></td><center>
              <center><td><?php echo $mostrar['fecha_nacimiento'] ?></td><center>
              <center><td><?php echo $mostrar['correo'] ?></td><center>
              <center><td><?php echo $mostrar['telefono'] ?></td><center>
              <center><td>

              <div>





              <a href="redes.php?id=<?php echo $id;?>"> 
           <button id='boton1'type= 'button' class="boton1"   title="REDES">REDES</button>
           
           










        <a href="sql/eliminar-wifi.php?id=<?php echo $id;?>"> 
        <button id='boton2 type= 'button' class="boton2"   title="REPRESENTATE">REPRESENTANTE</button>
        </div>
              </td><center>
            
            
        </tr>
        <?php }?> 
          
               
            </table>  
         
           </div>
       </div> 
    </div>
   
    

    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
    
      
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