<?php
$conn=mysql_connect('localhost','root','');
mysql_select_db('Restaurante',$conn);
$nome_cl=$_POST['nome'];
$telefone_cl=$_POST['telefone'];
$email_cl=$_POST['email'];
$tipo=$_POST['tipo'];
$mensagem=$_POST['mensagem'];
$cmd_buscar_id_cl="select*from cliente where Telefone='$telefone_cl'";
$buscar_id_cl=mysql_query($cmd_buscar_id_cl);
if(mysql_num_rows($buscar_id_cl)==0){
$sql_cl="insert into cliente(Nome,Telefone,Email) values('$nome_cl','$telefone_cl','$email_cl')";
$consulta=mysql_query($sql_cl);
$buscar_id_cl=mysql_query($cmd_buscar_id_cl);
}else{ $buscar_id_cl=mysql_query($cmd_buscar_id_cl); }
while($registro=mysql_fetch_array($buscar_id_cl)){
$id=$registro['id_cliente'];
}
$cliente=$id;
$sql="INSERT INTO mensagem (cliente,tipo,mensagem) VALUES ('$cliente','$tipo','$mensagem')";
$query=mysql_query($sql);
header("Location: index.php?user=".$nome_cl."&estado=delivery");
?>
