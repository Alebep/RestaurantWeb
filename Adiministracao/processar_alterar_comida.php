<html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu6.php')?>
    <div id="inf_nav">
     
        
     <?php
if(isset($_POST['alterar'])){
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$id_comida=$_POST['id_comida'];
if(isset($_FILES['arquivo']['name'])){
$sql="update comida set  Nome='".$_POST['nome']."', descricao='".$_POST['desc']."', preco='".$_POST['preco']."', imagem='".$_FILES['arquivo']['name']."' where id_comida=".$id_comida;
move_uploaded_file($_FILES['arquivo']['tmp_name'], '../imagem/'.$_FILES['arquivo']['name']);
}
else{
$sql="update comida set  Nome='".$_POST['nome']."', descricao='".$_POST['desc']."', preco='".$_POST['preco']."' where id_comida=".$id_comida;
}
$query=mysql_query($sql);
echo('Dados foram Alterados com sucesso!');
echo('<a href="alterarcomida.php">Clique aqui para Continuar</a>');
}

else{
?>
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="center">
<tr><td width="600px"><font face="Arial" align="center" size="4">Dados a Alterar<font><td></tr><br />

<?php
$id_comida=$_GET['id_comida'];
$Nome=$_GET['Nome'];
$desc=$_GET['desc'];
$preco=$_GET['preco'];

?>
<form enctype="multipart/form-data" method="POST" action="processar_alterar_comida.php">
 <table width="100%" border="0" cellspacing="15px" cellpadding="0">
    <tr> <td align="left" valign="top"><font face="Arial" size="3">Id</font></td>
         <td align="left" valign="top"><?php echo $id_comida; ?><td></tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Nome</font></td>
     <td><input type="text" name="nome" value="<?php echo $Nome;?>" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Descricao</font></td>
     <td><textarea rows="8" cols="40"  name="desc" ><?php echo $desc;?></textarea></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Preco</font></td>
     <td><input type="number" name="preco" value="<?php echo $preco;?>" pattern="[0-9]+$" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Imagem</font></td>
     <td><input type="file" id="arquivo" name="arquivo" /></td>
    </tr>
    <tr>
     <td><input type="submit" name="alterar" value="Alterar"/>
     <input type="hidden" name="id_comida" value="<?php echo $id_comida; ?>" /><td>
    </tr> 
 </table>
</form>
<?php } ?>

  </div>
  </div>
  </div>
 </body>

</html>
