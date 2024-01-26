<?php
if(!empty($_POST) and( empty($_POST['latitude']) or empty($_POST['longitude'])) ){header("Location: index.php?user=".$nome_cl."&estado=erro");}
else{
$conn=mysql_connect('localhost','root','');
mysql_select_db('Restaurante',$conn);
$nome_cl=$_POST['nome'];
$Sobrenome_cl=$_POST['sobrenome'];
$telefone_cl=$_POST['telefone'];
$email_cl=$_POST['email'];
$comida=$_POST['comida'];
$quantidade=$_POST['quantidade'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];

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
$sql="insert into servico(Cliente,Funcionario,Comida,Tipo,Quantidade,Latitude,Longitude) values('$cliente','4','$comida','2','$quantidade','$latitude','$longitude')";
$query=mysql_query($sql);
header("Location: index.php?user=".$nome_cl."&estado=delivery");
}
?>
