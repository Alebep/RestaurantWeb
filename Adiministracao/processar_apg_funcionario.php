<html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu4.php')?>
    <div id="inf_nav">
     
        
     <?php
if(isset($_REQUEST['apagar'])){
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$id=$_GET['id'];
$sql="delete from Funcionario where id_funcionario=".$id;
$query=mysql_query($sql);
echo('Dados foram eliminados com sucesso!');
echo('<a href="apg_funcionario.php">Clique aqui para Continuar</a>');
}

else{
?>
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="left">
<tr><td width="600px"><font face="Arial" align="center" size="5">Dados a eliminar<font><td></tr><br />

<?php
$id=$_GET['id'];
$Nome=$_GET['Nome'];
$Sbr=$_GET['Sobrenome'];
$sexo=$_GET['Sexo'];
$data=$_GET['Data'];
$tel=$_GET['telefone'];
$em=$_GET['email'];
$fun=$_GET['Fun'];
$morada=$_GET['Morada'];
$salario=$_GET['Salario'];


?>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Id: <? echo $id;?></font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Nome: <? echo $Nome;?><font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Sobrenome: <? echo $Sbr; ?> <font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Sexo: <? echo $sexo; ?> <font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Data: <? echo $data; ?> <font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Telefone: <? echo $tel; ?><font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Correio electronico: <? echo $em; ?><font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Fun&ccedil;&atilde;o: <? echo $fun; ?> <font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">morada: <? echo $morada; ?> <font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Salario: <? echo $salario; ?> <font><td></tr>
<tr></tr>
<tr><td><form method="GET"action="processar_apg_funcionario.php">
Tem certeza que deseja eliminar esse Cliente?<input type="submit" name="apagar" value="sim"><input type="hidden" name="id" value="<?php echo $id;?>">

</form></td></tr>
<?php } ?>

  </div>
  </div>
  </div>
 </body>
