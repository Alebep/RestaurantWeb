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
if(isset($_REQUEST['alterar'])){
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$id_cliente=$_GET['id_cliente'];
$sql="update cliente set  Nome='".$_REQUEST['nome']."', Sobrenome='".$_REQUEST['sobrenome']."', Telefone='".$_REQUEST['telefone']."', Email='".$_REQUEST['email']."' where id_cliente=".$id_cliente;
$query=mysql_query($sql);
echo('Dados foram Alterados com sucesso!');
echo('<a href="alterar_cliente.php">Clique aqui para Continuar</a>');
}

else{
?>
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="center">
<tr><td width="600px"><font face="Arial" align="center" size="4">Dados a Alterar<font><td></tr><br />

<?php
$id_cliente=$_GET['id_cliente'];
$Nome=$_GET['Nome'];
$Sobrenome=$_GET['Sbr'];
$telefone=$_GET['tl'];
$email=$_GET['E'];

?>
<form method="GET" action="processar_alterar_cliente.php">
 <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr> <td align="left" valign="top"><font face="Arial" size="3">Id</font></td>
         <td align="left" valign="top"><?php echo $id_cliente; ?><td></tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Nome</font></td>
     <td><input type="text" name="nome" value="<?php echo $Nome;?>"/></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Sobrenome</font></td>
     <td><input type="text" name="sobrenome" value="<?php echo $Sobrenome;?>"/></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Numero Telefone</font></td>
     <td><input type="text" name="telefone" value="<?php echo $telefone;?>"/></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Endere&ccedil;o de correio electr&oacute;nico</font></td>
     <td><input type="email" name="email" value="<?php echo $email;?>"/></td>
    </tr>
    <tr>
     <td><input type="submit" name="alterar" value="Alterar"/>
     <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>" /><td>
    </tr> 
 </table>
</form>
<?php } ?>

  </div>
  </div>
  </div>
 </body>

</html>
