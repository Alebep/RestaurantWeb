<html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu2.php')?>
    <div id="inf_nav">
     
        
     <?php
if(isset($_REQUEST['apagar'])){
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$id_reserva=$_GET['id_reserva'];
$sql="delete from reserva where id_reserva=".$id_reserva;
$query=mysql_query($sql);
echo('Dados foram eliminados com sucesso!');
echo('<a href="Eliminar.php">Clique aqui para Continuar</a>');
}

else{
?>
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="left">
<tr><td width="600px"><font face="Arial" align="center" size="4">Dados a eliminar<font><td></tr><br />

<?php
$id_reserva=$_GET['id_reserva'];
$n_pessoas=$_GET['n_pessoas'];
$data=$_GET['data'];
$hora=$_GET['hora'];
$cliente=$_GET['cliente'];
$funcionario=$_GET['funcionario'];
?>
<tr><td width="100px" align="left" bgcolor="99cc33"><font face="Arial" align="center" size="2">Id: <? echo $id_reserva;?><font><td></tr>
<tr></tr>
<tr><td><form method="GET"action="processar_eliminar.php">
Tem certeza que deseja eliminar essa reserva?<input type="submit" name="apagar" value="sim"><input type="hidden" name="id_reserva" value="<?php echo $id_reserva;?>">

</form></td></tr>
<?php } ?>

  </div>
  </div>
  </div>
 </body>

</html>
