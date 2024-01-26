<?php include('verificar_sessao.php');
      include('verificar_acesso.php');
?>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
  <script type="text/javascript" src="funcao/jquery-1.9.1.js"></script>
  <script>
$(document).ready(function(){
<?php
if(isset($_GET['user']) and isset($_GET['estado'])){if($_GET['estado']==='n'){ ?>
alert("<?=$_GET['user']?> verifica se colocou senhas iguais.");
<?php } } ?>
$("#popup").click(function() {
$("#areaoculta").css({'display':'block','height':($(document).height())+'px'});
});
$(".cancelar").click(function() {
$("#areaoculta").css("display", "none");
});

$("#delivery").click(function() {
$("#oculto").css({'display':'block','height':($(document).height())+'px'});
});
$(".cancelar").click(function() {
$("#oculto").css("display", "none");
});
});
</script>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu4.php')?>
    <div id="inf_nav">
     <form id="RH" name="RH" action="pr_RH.php" method="POST">   
   <table width="10%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td><img src="" width="" height=""></td>
    </tr>
   </table> 
   <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Nome de Usuario</font></td>
     <td><input type="text" class='input bradius' id="usuario" name="usuario" value=" " /></td>
    </tr>
    <tr>
    <td align="left" valign="top"><font face="Arial" size="3">Senha</font></td>
    <td><input type="password" class='input bradius' id="password" name="password" value="" /></td></tr>
    <tr>
	<tr>
    <td align="left" valign="top"><font face="Arial" size="3">Repetir Senha</font></td>
    <td><input type="password" class='input bradius' id="password2" name="password2" value="" /></td></tr>
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
    <td align="left" valign="top"><font face="Arial" size="3">Nivel</font></td>
    <td><select class='input bradius' size="1" name="D1">
     <option selected value="1">1</option> 
     <option value="2">2</option>
     <option value="3">3</option>
    </select><td>
    </tr>
    <tr>
     <td><input type="radio" id="radio" name="radio" value="sim"><font face="Arial" size="3">Aceitar termos e condi&ccedil;&otilde;es</font></td>
    </tr>
    <tr>
     <td><input type="submit" id="enviar_r" name="enviar_r" value="Cadastrar">
     <input type="reset" id="apagar" name="apagar" value="Limpar"></td>
    </tr> 
   </table>
  </form>




  </div>
  </div>
  </div>
 </body>

</html>
