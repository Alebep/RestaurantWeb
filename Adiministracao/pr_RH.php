<?php
if(!empty($_POST) and (empty($_POST['radio']) or empty($_POST['usuario']) or empty($_POST['password']) or empty($_POST['funcionario']) or empty($_POST['D1']))){
header('Location: RH.php');
}
elseif($_POST['password']!=$_POST['password2']){header("Location: RH.php?user=".$_POST['Usuario']."&estado=n");}
else{
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$nome=$_POST['usuario'];
$senha=$_POST['password'];
$funcionario=$_POST['funcionario'];
$D1=$_POST['D1'];
$sql="insert into usuario(Senha,Funcionario,nivel,Usuario) values('$senha','$funcionario','$D1','$nome')";
$query=mysql_query($sql);}
?>
<html>
 <head>
  <link rel="stylesheet" type="text/css" >
 </head>
 <body>
  <div id="estrutura">
    <?php include ('menu.php');?>
    <div id="principal">
      <?php include ('menu4.php');?>
      <div id="inf_nav">
       Cadastro efectuado com sucesso<a href="RH.php"> Clique aqui para continuar</a>
      </div>
    </div>
  <div/>
 </body>
</html>
