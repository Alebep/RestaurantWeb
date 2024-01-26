<?php
if(!empty($_GET) and (empty($_GET['nome_cliente']) and empty($_GET['sobrenome_cliente']) or empty($_GET['telefone_cliente']) or empty($_GET['numeros_de_pessoas']) or empty($_GET['data']) or empty($_GET['hora']) or empty($_GET['radio']))){
header("Location: reservaf.php");exit;
}
include ("funcao/ligacao_db.php");
$nome_cl=$_GET['nome_cliente'];
$Sobrenome_cl=$_GET['sobrenome_cliente'];
$telefone_cl=$_GET['telefone_cliente'];
$email_cl=$_GET['email_cliente'];
$n_pessoas=$_GET['numeros_de_pessoas'];
$data=$_GET['data'];
$hora=$_GET['hora'];

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
$cliente=$id;
$sql_reserva="insert into reserva(N_pessoas,data,hora,cliente,funcionario) values('$n_pessoas','$data','$hora','$cliente','2')";
$consulta_insert_rs=mysql_query($sql_reserva);
header("Location: index.php?user=".$nome_cl."&estado=reserva"); 
 ?> 
