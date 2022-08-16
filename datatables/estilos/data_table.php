<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>  
    <link rel="stylesheet" type="text/css" href="../datatable.css"/> 
    <title></title>
  </head>
  <body>
    <h3>Alumnos </h3>
   
    <div id="main-container">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Cedula</th>
                    <th>Fecha Nacimiento</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
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
                $direccion=$mostrar['direccion'];
               

                
                              
?>  

        
        
            <tr>
             <center><td><?php echo $mostrar['nombres'] ?></td><center>
              <center><td><?php echo $mostrar['apellidos'] ?></td><center>
              <center><td><?php echo $mostrar['cedula'] ?></td><center>
              <center><td><?php echo $mostrar['fecha_nacimiento'] ?></td><center>
              <center><td><?php echo $mostrar['correo'] ?></td><center>
              
              <center><td><?php echo $mostrar['direccion'] ?></td><center>
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>  
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
        </script></script>
      
      
  </body>

