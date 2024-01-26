<?php
if(!empty($_POST) and (empty($_POST['nome']) and empty($_POST['sobrenome']) or empty($_POST['telefone']) or empty($_POST['comida']) or empty($_POST['quantidade']) )){
header("Location: index.php");exit;
}
include ("funcao/ligacao_db.php");
$nome_cl=$_POST['nome'];
$Sobrenome_cl=$_POST['sobrenome'];
$telefone_cl=$_POST['telefone'];
$email_cl=$_POST['email'];
$n_pessoas=$_POST['quantidade'];
$comida=$_POST['comida'];
$quantidade=$_POST['quantidade'];


$cmd_buscar_id_cl="select*from cliente where Telefone='$telefone_cl'";
$buscar_id_cl=mysql_query($cmd_buscar_id_cl);
if(mysql_num_rows($buscar_id_cl)==0){
$sql_cl="insert into cliente(Nome,Sobrenome,Telefone,Email) values('$nome_cl','$Sobrenome_cl','$telefone_cl','$email_cl')";
$consulta=mysql_query($sql_cl);
$buscar_id_cl=mysql_query($cmd_buscar_id_cl);
}else{ $buscar_id_cl=mysql_query($cmd_buscar_id_cl); }
while($registro=mysql_fetch_array($buscar_id_cl)){
$id=$registro['id_cliente'];
}
$cliente=$id;
$sql_take_away="INSERT INTO servico(Cliente,Funcionario,Comida,Tipo,Quantidade,Latitude,Longitude) VALUES ('$cliente','4', '$comida','1','$quantidade', NULL, NULL)";
$consulta_insert_rs=mysql_query($sql_take_away);
header("Location: index.php?user=".$nome_cl."&estado=takeaway");
?>
