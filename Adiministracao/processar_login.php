<?php

if(!empty($_POST) and (empty($_POST['Nome_usuario']) or empty($_POST['password']))){header("location: ../index.php");exit;}
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$usuario=$_POST['Nome_usuario'];
$password=$_POST['password'];
$sql="select Usuario,Senha from usuario where Usuario='$usuario' and Senha='$password'";
$query=mysql_query($sql);
if(mysql_num_rows($query) == 1){
  $sql2="select * from usuario where Usuario='$usuario' and Senha='$password'";
  $query2=mysql_query($sql2);
  while($dados=mysql_fetch_array($query2)){ $v=$dados['id_usuario']; $classe=$dados['nivel']; }
  $validacao="1";
  session_start();
  $_SESSION['id_usuario'] =$validacao;
  $_SESSION['grau']=$classe;
  header("location: menu.php");
  exit;
 }
 else{
 header("location: ../index.php");
 exit;
 }
  mysql_free_result($query);

?>
