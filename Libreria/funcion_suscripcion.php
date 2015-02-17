
<?php
require 'session.php'
?>

<?php


  function insSuscription($idUsuario,$suscripcion){
            
      
            $link = mysqli_connect("10.3.4.253","libreria","libreria");
            mysqli_select_db($link, "libreria");
            $link->query("SET NAMES 'utf8'"); 
            $lista = mysqli_query($link, "UPDATE usuarios SET suscripcion =".$suscripcion."  WHERE idUsuario=".$idUsuario);
            mysqli_close($link);

             
        }  
        

   
   if (isset($_REQUEST['activo'])){ 
      insSuscription(1,1);
   } else { 
    insSuscription(1,0);
    } 
   header ('Location:index.php');
    ?>