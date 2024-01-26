<html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu5.php')?>
    <div id="inf_nav">
     
        
     <?php
if(isset($_REQUEST['alterar'])){
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));

$sql="update servico set Comida='".$_REQUEST['cm']."',Funcionario='".$_REQUEST['fun']."',Tipo='".$_REQUEST['Tipo']."',Cliente='".$_REQUEST['cl']."' Quantidade='".$_REQUEST['qm']."' where id_servico='".$_POST['id']."'";
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
$cl=$_GET['cl'];
$fun=$_GET['fun'];
$cm=$_GET['cm'];
$qm=$_GET['quantidade'];
$tipo=$_GET['tipo'];

?>
<form method="POST" action="pr_alt_tk.php">
 <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr> <td align="left" valign="top"><font face="Arial" size="3">Id</font></td>
         <td align="left" valign="top"><?php echo $id; ?><td></tr>
    <tr>
    <tr>
     <td><input type="hidden" name="usu" value="<?php echo $cl;?>"></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Funcionario</font></td>
     <td><input type="number" name="funcionario" value="<?php echo $fun; ?>"></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Comida</font></td>
             <td><?php
         include('funcao/ligacao_db.php');
         $sql="select * from comida";
         $m=mysql_query($sql);
         echo "<select name='cm'/>";
        while($v=mysql_fetch_array($m)){
         echo "<option value='".$v['id_comida']."'>".$v['Nome']." pre&ccedil;o->".$v['preco']."</option>";
}echo "</select>";
?> </td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">quantidade</font></td>
     <td><input type="number" name="qm" value="<?php echo $qm; ?>"></td>
    </tr>
    <tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Tipo</font></td>
     <td><?php
         include('funcao/ligacao_db.php');
         $sql_ct="select * from categoria_ser";
         $mv=mysql_query($sql_ct);
         echo "<select name='Tipo'/>";
        while($y=mysql_fetch_array($mv)){
         echo "<option value='".$y['id_cat']."'>".$y['categoria']."</option>";
}echo "</select>";
?> </td>     
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
