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
$sql="select id_usuario,Usuario,Funcionario,nivel,Senha from usuario order by id_usuario asc";
$query=mysql_query($sql);
if($query){
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="50%" align="center"><font face="Arial" align="right" size="5">Lista de Usuarios<font><td></tr>');
echo('</table>');


echo('<table width="850px" align="left" border="0">');
echo('<tr><td width="90px" align="center" bgcolor="99cc33"><font face="Arial" size="2">ID</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Nome usuario</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Funcionario</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Nivel</font></td></tr>');

while($mostrar=mysql_fetch_array($query)){
$id=$mostrar['id_usuario'];
$usu=$mostrar['Usuario'];
$Fun=$mostrar['Funcionario'];
$Nivel=$mostrar['nivel'];

echo("<tr><td align=\"center\">$id</td>");
echo("<td align=\"center\">$usu</td>");
echo("<td align=\"center\">$Fun</td>");
echo("<td align=\"center\">$Nivel</td>");



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
