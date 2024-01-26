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
if(isset($_REQUEST['alterar'])){
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$id_reserva=$_GET['id_reserva'];
$n_pessoas=$_REQUEST['n_pessoas'];
$data=$_REQUEST['data'];
$hora=$_REQUEST['hora'];
$funcionario=$_REQUEST['funcionario'];
$sql="update reserva set  N_pessoas='".$_REQUEST['n_pessoas']."' ,data='".$_REQUEST['data']."', hora='".$hora=$_REQUEST['hora']."',funcionario='".$_REQUEST['funcionario']."' where id_reserva='$id_reserva'";
$query=mysql_query($sql);
echo('Dados foram Alterados com sucesso!');
echo('<a href="Alterar.php">Clique aqui para Continuar</a>');
}

else{
?>
<table width="600px" border="0" cellspacing="0" cellpadding="0" align="left">
<tr><td width="600px"><font face="Arial" align="center" size="4">Dados a Alterar<font><td></tr><br />

<?php
$id_reserva=$_GET['id_reserva'];
$n_pessoas=$_GET['n_pessoas'];
$data=$_GET['data'];
$hora=$_GET['hora'];
$funcionario=$_GET['funcionario'];

?>
<form method="GET" action="processar_alterar_res.php">
 <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr> <td align="left" valign="top"><font face="Arial" size="3">Id</font></td>
         <td align="left" valign="top"><?php echo $id_reserva; ?><td></tr>
    <tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Data da reserva</font></td>
     <td><input type="date" name="data" value="<?php echo $data;?>" maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2014-12-02" max="2016-12-12" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">hora</font></td>
     <td><input type="time" name="hora" value="<?php echo $hora;?>" pattern="[0-9]{2}:[0-9]{2} [0-9]{2}$" min="10:30:00" max="23:30:00" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Numero de pessoas</font></td>
     <td><input type="number" min="2" max="15" name="n_pessoas" value="<?php echo $n_pessoas;?>" pattern="[0-9]+$" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Funcionario</font></td>
     <td>
   <?php
         $servidor="localhost";$admin="root";$password="";$BD="Restaurante";$Pasta_raiz="http//:localhost";
$conn=mysql_connect($servidor,$admin,$password) or die ('erro na conex&atilde;o');
mysql_select_db($BD,$conn);
         $sql="select * from funcionario";
         $m=mysql_query($sql);
         echo "<select class='input bradius' id='funcionario' name='funcionario'/>";
        while($v=mysql_fetch_array($m)){
         echo "<option value='".$v['id_funcionario']."'>".$v['Nome']."</option>";
}echo "</select>";
?> </td>
    </tr>
    <tr>
     <td><input type="submit" name="alterar" value="Alterar"/>
     <input type="hidden" name="id_reserva" value="<?php echo $id_reserva; ?>" /><td>
    </tr> 
 </table>
</form>
<?php } ?>

  </div>
  </div>
  </div>
 </body>

</html>
