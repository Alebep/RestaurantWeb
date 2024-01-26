<!doctype html>
<?php include('verificar_sessao.php');?><html>
<html>
<head>
<link rel="Stylesheet" type="text/css" href="estilo/estilo.css" />
<meta charset="utf-8">
</head>
<body>
<div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu5.php')?>
    <div id="inf_nav">    
   

   <form id="servico" name="servico" action="pr_ser.php" method="POST">
  <table width="100%" border="0" cellspacing="15px" cellpadding="0">
  <tbody>
  <tr><td><label for="nome">Nome</label></td><td><input class='input bradius' required="" type="text" id="nome" name="nome" value="" pattern="[a-z\s]+$" /></td></tr>
  
  <tr><td><label for="sobrenome">Sobrenome</label></td><td><input class='input bradius' required="" type="text" id="sobrenome" name="sobrenome" value="" pattern="[a-z\s]+$" /></td></tr>

  <tr><td><label for="telefone">Telefone</label></td><td><input class='input bradius' required="" type="text" id="telefone" name="telefone" value="" pattern="[2-9]{1}[0-9]{8}$" /></td></tr>
  
  <tr><td><label for="email">Email</label></td><td><input class='input bradius' required="" type="email" id="email" name="email" value="" /></td></tr>

<tr><td><label for="comida">Comida</label></td>
   <td>
   <?php
         $servidor="localhost";$admin="root";$password="";$BD="Restaurante";$Pasta_raiz="http//:localhost";
$conn=mysql_connect($servidor,$admin,$password) or die ('erro na conex&atilde;o');
mysql_select_db($BD,$conn);
         $sql="select * from comida";
         $m=mysql_query($sql);
         echo "<select class='input bradius' id='comida' name='comida'/>";
        while($v=mysql_fetch_array($m)){
         echo "<option value='".$v['id_comida']."'>".$v['Nome']." pre&ccedil;o->".$v['preco']."</option>";
}echo "</select>";
?> </td>
</tr>
  <tr><td><label for="quantidade">Quantidade</label></td><td><input class='input bradius' required="" type="number" id="quantidade" name="quantidade" value="" pattern="[0-9]+$" /></td></tr>
   <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Tipo</font></td>
     <td><?php
         include('funcao/ligacao_db.php');
         $sql_ct="select * from categoria_ser";
         $mv=mysql_query($sql_ct);
         echo "<select class='input bradius' id='Tipo' name='Tipo'/>";
        while($y=mysql_fetch_array($mv)){
         echo "<option value='".$y['id_cat']."'>".$y['categoria']."</option>";
}echo "</select>";
?> </td>     
    </tr>
   
   </tbody>
  </table>
    <input type="submit" value="Enviar">
 </form>
   
</div>   
   </div>
  </div>
</body>
</html>