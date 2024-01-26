<!doctype html>
<?php include('verificar_sessao.php');?><html>
 <html>
 <head>
<title><?php echo $titulo;?> </title>
<link rel="Stylesheet" type="text/css" href="estilo/estilo.css" />
<meta charset="utf-8">
</head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu2.php')?>
    <div id="inf_nav">
     <?php include ('reserva.php');?>
    </div>   
   </div>
  </div>
   
  
 
 </body>


</html>
