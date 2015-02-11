<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->







<html>
    <?php
    
    function getSuscription($idUsuario){
            require'config.php';
            $link = mysqli_connect($DB_HOST,$DB_USER, $DB_PASSWORD);
            mysqli_select_db($link, "libreria");
            $link->query("SET NAMES 'utf8'"); 
            $lista = mysqli_query($link, "SELECT suscripcion FROM usuarios WHERE  idUsuario =".$idUsuario);
            $suscripcion = mysqli_fetch_array($lista);
            // echo $suscripcion['suscripcion'];
            mysqli_close($link);
            return $suscripcion['suscripcion'];
             
        }  
   
  ?>
    
   
    
    
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    <center>
        <h3>Estado de la suscripción<br></h3>
    </center>
    <div>
  <FORM ACTION="suscripcion.php" METHOD=POST>

<CENTER>
<TABLE border="0">

    
   <?php 
   
   if (getSuscription(1) == "1") {
       $checked=" checked ";
   } else {
       $checked= "";
   }
   echo "<TD>Suscripcion:<input type='checkbox' name='activo' value='1' ".$checked."</TD>";
   ?>

<TR>
   <TD ALIGN=CENTER>
       <INPUT TYPE="submit" VALUE="Confirmar">
  </TD>

</TABLE>
   
   
</CENTER>
</FORM>
          
        </div>
    </body>
</html>
            
 