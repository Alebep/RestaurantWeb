<?php include('verificar_sessao.php');include('verificar_acesso.php');?><html>
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

$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$sql="select * from Funcionario";
$query=mysql_query($sql);
if($query){
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="50%" align="center"><font face="Arial" align="right" size="5">Lista de Funcionarios<font><td></tr>');
echo('</table>');


echo('<table width="850px" align="left" border="0">');
echo('<tr><td width="1px" align="center" bgcolor="99cc33"><font face="Arial" size="1">ID</font></td>');
echo('<td width="50px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Nome</font></td>');
echo('<td width="50px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Sobrenome</font></td>');
echo('<td width="50px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Sexo</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Data de Nascimento</font></td>');
echo('<td width="50px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Fun&ccedil;&atilde;o</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Numero de telefone</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Endere&ccedil;o de correio Electr&ocirc;nico</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Morada</font></td>');
echo('<td width="50px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Salario</font></td></tr>');



while($mostrar=mysql_fetch_row($query)){
$row0=$mostrar['0'];
$row1=$mostrar['1'];
$row2=$mostrar['2'];
$row3=$mostrar['3'];
$row4=$mostrar['4'];
$row5=$mostrar['5'];
$row6=$mostrar['6'];
$row7=$mostrar['7'];
$row8=$mostrar['8'];
$row9=$mostrar['9'];


echo("<tr><td align=\"center\">$row0</td>");
echo("<td align=\"center\">$row1</td>");
echo("<td align=\"center\">$row8</td>");
echo("<td align=\"center\">$row2</td>");
echo("<td align=\"center\">$row3</td>");
echo("<td align=\"center\">$row4</td>");
echo("<td align=\"center\">$row5</td>");
echo("<td align=\"center\">$row6</td>");
echo("<td align=\"center\">$row7</td>");
echo("<td align=\"center\">$row9 $</td></tr>");



 }echo('</table>');
}

else
{
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="100%" align="left"><font face="Arial" align="right" size="4">Não tem nenhum cliente registrado<font><td></tr>');
echo('</table>');
}
mysql_free_result($query);
?>



  </div>
  </div>
  </div>
 </body>

</html>
