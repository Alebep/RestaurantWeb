<?php
include('funcao/ligacao_db.php');
$nome_cl=$_POST['nome'];
$Sobrenome_cl=$_POST['sobrenome'];
$telefone_cl=$_POST['telefone'];
$email_cl=$_POST['email'];
$comida=$_POST['comida'];
$Tipo=$_POST['Tipo'];
$quantidade=$_POST['quantidade'];
$cmd_buscar_id_cl="select * from cliente where Telefone='$telefone_cl'";
$buscar_id_cl=mysql_query($cmd_buscar_id_cl);
if(mysql_num_rows($buscar_id_cl)==0){
$sql_cl="insert into cliente(Nome,Sobrenome,Telefone,Email) values('$nome_cl','$Sobrenome_cl','$telefone_cl','$email_cl')";
$consulta=mysql_query($sql_cl);
$buscar_id_cl=mysql_query($cmd_buscar_id_cl);
}else{ $buscar_id_cl=mysql_query($cmd_buscar_id_cl);}
while($registro=mysql_fetch_array($buscar_id_cl)){
$id=$registro['id_cliente'];
}
$query="INSERT INTO servico (Cliente,Funcionario,Comida,Tipo,Quantidade) VALUES ('$id','4','$comida','$Tipo','$quantidade')";
$exe_query=mysql_query($query);
?>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu5.php')?>
    <div id="inf_nav">
    <?php 
	include('funcao/ligacao_db.php');
	$rm="select categoria from categoria_ser where id_cat=".$Tipo;
	$Rsql=mysql_query($rm);
	while($reg=mysql_fetch_array($Rsql)){
$Rq=$reg['categoria'];
}
	echo $Rq." efectuada com sucesso";echo('<a href="take-away.php">Clique aqui para continuar</a>');?> 
        
    

  </div>
  </div>
  </div>
 </body>

</html>