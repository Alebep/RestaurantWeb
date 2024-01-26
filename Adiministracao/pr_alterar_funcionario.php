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
$id=$_POST['id'];
$sql="update Funcionario set Nome='".$_REQUEST['nome']."',sexo='".$_REQUEST['sexo']."',Data_nascimento='".$_REQUEST['data']."',Telefone='".$_REQUEST['telefone']."',Email='".$_REQUEST['email']."',Morada='".$_REQUEST['morada']."',Sobrenome='".$_REQUEST['sobrenome']."',Salario='".$_REQUEST['salario']."',funcao='".$_REQUEST['D2']."' where id_funcionario=".$id;
$query=mysql_query($sql);
echo('Dados foram alterados com sucesso!');
echo('<a href="alterar_funcionario.php">Clique aqui para Continuar</a>');
}

else{
?>
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="left">
<tr><td width="600px"><font face="Arial" align="center" size="5">Dados a alterar<font><td></tr><br />

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
   <form method="POST" action="pr_alterar_funcionario.php">
   <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr><td align="left" valign="top"><font face="Arial" align="center" size="3">Id: <? echo $id;?></font><td></tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Nome</font></td>
     <td><input type="text" id="nome" name="nome" value="<?php echo $Nome;?>" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /></td>
    </tr>
    <tr>
    <td align="left" valign="top"><font face="Arial" size="3">Sobrenome</font></td>
    <td><input type="text" id="sobrenome" name="sobrenome" value="<?php echo $Sbr; ?>" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">sexo</font></td>
     <td><select size="1" name="sexo">
      <option selected value="<? echo $sexo; ?>"><?php echo $sexo; ?></option>
       <option value="M"> M</option> 
      <option value="F">F</option>
     </select></td>         
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Data de Nascimento</font></td>
     <td><input type="date" id="data" name="data" value="<?php echo $data; ?>" max="1996-12-31" maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Fun&ccedil;&atilde;o</font></td>
     <td><select size="1" name="D2">
      <option selected value="<?php echo $fun; ?>">
       <? if($fun==1){echo "Administrador";}
         if($fun==2){ echo "Gerente";}
         if($fun==3) {echo "Reservador";} if($fun==4) echo "Gar&ccedil;on";?>
      </option>
      <option value="1">Administrador</option> 
      <option value="2">Gerente</option>
      <option value="3">cozinheiro</option>
      <option value="4">gar&ccedil;on</option>
     </select><td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Numero  de telefone</font></td>
     <td align="left" valign="top"><input type="text" id="telefone" name="telefone" value="<?php echo $tel; ?>" pattern="[2-9]{1}[0-9]{8}$" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Endere&ccedil;o de correio electr&oacute;nico</font></td>
     <td align="left" valign="top"><input type="email" id="email" name="email" value="<?php echo $em; ?>"/></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Morada</font></td>
     <td><input type="text" id="morada" name="morada" value="<?php echo $morada; ?>"/></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Salario</font></td>
     <td><input type="number" min="250" max="2000" value="500" id="salario" name="salario" value="<?php echo $salario; ?> " pattern="[0-9]+$" /></td>
    </tr>
    <tr>
     
    </tr>
    <tr>
     <td><input type="submit" id="alterar" name="alterar" value="alterar">
      <input type="hidden" name="id" value="<?php echo $id;?>"></td>
    </tr> 
   </table>
  </form>
<?php } ?>

  </div>
  </div>
  </div>
 </body>
