<?php
   session_start();
?>

<HTML>
   <HEAD>
   <STYLE type='text/css'>
   body {
	   background-color:rgb(50,100,50);
	   color:rgb(255,255,255);
   }
   </STYLE>
   </HEAD>

   <BODY>
   <H2>PAGINA AGENTI</H2> 

   <BR><BR>
   <?php echo "Benvenuto ".$_SESSION['nome']." ".$_SESSION['cognome']; ?>
   <BR>
   <?php echo "Livello:".$_SESSION['liv']; ?>

   <BR><BR>
   Contenuto della pagina 2
   
   
   
   
   
   <BR><BR>
   <A href='pag3.php'>pagina 3</A>    
   <A href='pag4.php'>pagina 4</A>    
   <A href='pag1.php'>pagina 1</A>   
   <A href='login.php'>logout</A>    
   </BODY>
</HTML>