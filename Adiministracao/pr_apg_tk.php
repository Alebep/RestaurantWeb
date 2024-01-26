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
$id_servico=$_GET['id_servico'];
$sql="delete from servico where id_servico=".$id_servico;
$query=mysql_query($sql);
echo('Dados foram eliminados com sucesso!');
echo('<a href="take_away.php">Clique aqui para Continuar</a>');
}

else{
?>
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="left">
<?php $id_servico=$_GET['id']; ?>
<tr><td><form method="GET"action="pr_apg_tk.php">
Tem certeza que deseja eliminar esse Cliente?<input type="submit" name="apagar" value="sim"><input type="hidden" name="id_servico" value="<?php echo $id_servico;?>">

</form></td></tr>
<?php } ?>

  </div>
  </div>
  </div>
 </body>
