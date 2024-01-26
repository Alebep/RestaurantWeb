<html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu3.php')?>
    <div id="inf_nav">
     
        
     <?php
if(isset($_REQUEST['apagar'])){
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$id_cliente=$_GET['id_cliente'];
$sql="delete from cliente where id_cliente=".$id_cliente;
$query=mysql_query($sql);
echo('Dados foram eliminados com sucesso!');
echo('<a href="apagar_cliente.php">Clique aqui para Continuar</a>');
}

else{
?>
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="left">
<tr><td width="600px"><font face="Arial" align="center" size="5">Dados a eliminar<font><td></tr><br />

<?php
$id_cliente=$_GET['id_cliente'];
$Nome=$_GET['Nome'];
$Sbr=$_GET['Sbr'];
$tel=$_GET['tl'];
$Em=$_GET['E'];

?>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Id: <? echo $id_cliente;?></font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Nome: <? echo $Nome;?><font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Sobrenome: <? echo $Sbr; ?> <font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Telefone: <? echo $tel; ?><font><td></tr>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="3">Correio electronico: <? echo $Em; ?><font><td></tr>
<tr></tr>
<tr><td><form method="GET"action="processar_apg_cliente.php">
Tem certeza que deseja eliminar esse Cliente?<input type="submit" name="apagar" value="sim"><input type="hidden" name="id_cliente" value="<?php echo $id_cliente;?>">

</form></td></tr>
<?php } ?>

  </div>
  </div>
  </div>
 </body>
