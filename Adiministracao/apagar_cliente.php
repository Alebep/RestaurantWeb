<?php include('verificar_sessao.php');?><html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 <STYLE type="text/css">

</STYLE> 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu3.php')?>
    <div id="inf_nav">
     <?php

$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$sql="select * from cliente order by Nome asc";
$query=mysql_query($sql);
if($query){
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="50%" align="center"><font face="Arial" align="right" size="5">Lista de Clientes<font><td></tr>');
echo('</table>');


echo('<table width="850px" align="left" border="0">');
echo('<tr><td width="90px" align="center" bgcolor="99cc33"><font face="Arial" size="2">ID</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Nome</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Sobrenome</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Telefone</font></td>');
echo('<td width="250px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Endere&ccedil;o de correio Electr&ocirc;nico</font></td></tr>');

while($mostrar=mysql_fetch_array($query)){
$id_cliente=$mostrar['id_cliente'];
$Nome=$mostrar['Nome'];
$Sbr=$mostrar['Sobrenome'];
$Tel=$mostrar['Telefone'];
$Email=$mostrar['Email'];

echo("<tr><td align=\"center\">$id_cliente</td>");
echo("<td align=\"center\"><a href=\"processar_apg_cliente.php?id_cliente=$id_cliente&Nome=$Nome&Sbr=$Sbr&tl=$Tel&E=$Email\">$Nome</a></td>");
echo("<td align=\"center\">$Sbr</td>");
echo("<td align=\"center\">$Tel</td>");
echo("<td align=\"center\">$Email</td></tr>");


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
