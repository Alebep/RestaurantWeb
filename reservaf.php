<!doctype html>
<html>
 <header>

<title><?php echo $titulo;?> </title>

<link rel="Stylesheet" type="text/css" href="Adiministracao/estilo/estilo.css">
<meta charset="utf-8">
</header>
 <body>
 
  <div id="estrutura">

   <div id="cabecario"> 
    <img src="imagem/guyjguhgtcyjgty.jpg" width="1024px" height="200px"/>
   </div>

  <?php include('menu.php');?>

   <div id="principal">
     <?php include ('reserva.php');?>
   </div>

   <div id="rodape">
     <p>Todos direitos Reservados</p>
   </div>

  </div>
   
  
 
 </body>


</html>
