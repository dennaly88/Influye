
 

<?php
include ('sql/conexion.php');
$id = $_GET['id'];




$query = "SELECT * FROM datos_personales WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

     

      $row['facebook_persona'];
      $row['twitter_persona'];
      $row['instagram_persona'];
      $row['tiktok_persona']; 
      $row['youtube_persona'];
      


      echo $row['facebook_persona'];



     
?>  
  <div id="openModal" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <center><h4>Redes</h4>
                    <hr>
<p><input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook" value="<?php echo $row['facebook_persona'];?>" required></p>
<p><input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter" value="<?php echo $row['twitter_persona'];?>" required></p>
<p><input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram" value="<?php echo $row['instagram_persona'];?>" required></p>
<p><input type="text" class="form-control" id="tiktok" name="tiktok" placeholder="tiktok" value="<?php echo $row['tiktok_persona'];?>" required></p>
<p><input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube" value="<?php echo $row[' youtube_persona'];?>" required></p>
                </div>
            </div>

  
         

</div></td>
               
            </tr>




