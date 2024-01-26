<?php include('verificar_sessao.php');?><html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div  style="overflow-y:" id="principal">
   
    
     <?php $conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$sql='select * from mensagem';
$query=mysql_query($sql);
if($query){
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="50%" align="center"><font face="Arial" align="right" size="5">Lista de Mensagemens<font><td></tr>');
echo('</table>');


echo('<table width="1024px" align="left" border="0">');
echo('<tr><td width="90px" align="center" bgcolor="99cc33"><font face="Arial" size="1">ID</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Nome</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Numero</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Email</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Tipo</font></td>');
echo('<td width="900px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Mensagemem</font></td>');
while($mostrar=mysql_fetch_array($query)){
$id_mensagem=$mostrar['id_mensagem'];
$cliente=$mostrar['cliente'];
$tipo=$mostrar['tipo'];
$mensagem=$mostrar['mensagem'];
$sql_b="select * from cliente where id_cliente=".$cliente;
$query_b=mysql_query($sql_b);
while($mostrar3=mysql_fetch_array($query_b)){$nome=$mostrar3['Nome'];
$email=$mostrar3['Email'];
$telefone=$mostrar3['Telefone'];
}


echo("<tr><td align=\"center\">$id_mensagem</td>");
echo("<td align=\"center\">$nome</td>");
echo("<td align=\"center\">$telefone</td>");
echo("<td align=\"center\">$email</td>");
echo("<td align=\"center\">$tipo</td>");
echo("<td align=\"center\">$mensagem</td></tr>");

}


echo('</table>');

}

else{
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="100%" align="left"><font face="Arial" align="right" size="4">Não foi registrada nenhuma comida<font><td></tr>');
echo('</table>');
}
mysql_free_result($query);
?>


  
  </div>
  </div>
 </body>

</html>
