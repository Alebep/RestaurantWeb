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
if(isset($_REQUEST['alterar'])){
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));

$sql="update usuario set Senha='".$_REQUEST['password']."',Funcionario='".$_REQUEST['funcionario']."',nivel='".$_REQUEST['D1']."',usuario='".$_REQUEST['usu']."' where id_usuario='".$_POST['id']."'";
$query=mysql_query($sql);
echo('Dados foram eliminados com sucesso!');
echo('<a href="alterar_usuario.php">Clique aqui para Continuar</a>');
}

else{
?>
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="left">
<tr><td width="600px"><font face="Arial" align="center" size="5">Dados a Alterar<font><td></tr><br />

<?php
$id=$_GET['id'];
$usuario=$_GET['usu'];
$fun=$_GET['fun'];
$nv=$_GET['nivel'];
$pws=$_GET['senha'];

?>
<form method="POST" action="processar_alterar_usuario.php">
 <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr> <td align="left" valign="top"><font face="Arial" size="3">Id</font></td>
         <td align="left" valign="top"><?php echo $id; ?><td></tr>
    <tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Nome Usuario</font></td>
     <td><input type="text" name="usu" value="<?php echo $usuario;?>"></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Funcionario</font></td>
     <td><input type="number" name="funcionario" value="<?php echo $fun; ?>"></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Nivel</font></td>
     <td>
     <select size="1" name="D1">
      <option selected value="<?php echo $nv; ?>"><?php echo $nv; ?></option>
       <option value="1"> 1</option> 
      <option value="2">2</option>
      <option value="3">3</option>
     </select>      
     </td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Senha</font></td>
     <td><input type="password" name="password" value="<?php echo $pws; ?>"></td>
    </tr>
    <tr>
     <td><input type="submit" name="alterar" value="Alterar"/>
     <input type="hidden" name="id" value="<?php echo $id; ?>"/><td>
    </tr> 
 </table>
</form>
<?php } ?>

  </div>
  </div>
  </div>
 </body>
