<?php
include ("funcao/ligacao_db.php");

$nomec=$_POST['nomec'];
$descc=$_POST['descc'];
$precoc=$_POST['precoc'];

$sql="insert into comida (Nome,descricao,preco,imagem) values ('$nomec','$descc','$precoc','".$_FILES['arquivo']['name']."')";
$cons=mysql_query($sql);		
move_uploaded_file($_FILES['arquivo']['tmp_name'], '../imagem/'.$_FILES['arquivo']['name']);
?>
<html>
<head>
<link rel="Stylesheet" type="text/css" href="estilo/estilo.css" />
<meta charset="utf-8">
</head>
<body>
<div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu6.php')?>
    <div id="inf_nav">    
   
<?php echo "Comida adicionada com sucesso";echo('<a href="visualizarcomida.php">Clique aqui para continuar</a>');?> 
</div>   
   </div>
  </div>
</body>
</html>
