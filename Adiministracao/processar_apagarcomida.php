<html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu6.php')?>
    <div id="inf_nav">
     
        
<?php
$id_comida=$_GET['id_comida'];
//$imagem=$_GET['imagem'];
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));

$sql="delete from comida where id_comida=".$id_comida;
$query=mysql_query($sql);
//unlink("../imagem/".$imagem);
echo('Dados foram Alterados com sucesso!');
echo('<a href="alterarcomida.php">Clique aqui para Continuar</a>');



?>

  </div>
  </div>
  </div>
 </body>

</html>