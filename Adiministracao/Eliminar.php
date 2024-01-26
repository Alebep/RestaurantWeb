<?php include('verificar_sessao.php');?><html>
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
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$sql='select * from reserva order by data asc';
$query=mysql_query($sql);
if($query){
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="50%" align="center"><font face="Arial" align="right" size="5">Lista de Reservas<font><td></tr>');
echo('</table>');


echo('<table width="850px" align="left" border="0">');
echo('<tr><td width="90px" align="center" bgcolor="99cc33"><font face="Arial" size="1">ID</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Numero de pessoas</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Data</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Hora</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Cliente</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Funcionario</font></td></tr>');
while($mostrar=mysql_fetch_array($query)){
$id_reserva=$mostrar['id_reserva'];
$n_pessoas=$mostrar['N_pessoas'];
$data=$mostrar['data'];
$hora=$mostrar['hora'];
$cliente=$mostrar['cliente'];
$funcionario=$mostrar['funcionario'];

echo("<tr><td align=\"center\"><a href=\"processar_eliminar.php?id_reserva=$id_reserva&n_pessoas=$n_pessoas&data=$data&hora=$hora&cliente=$cliente&funcionario=$funcionario\">$id_reserva</a></td>");
echo("<td align=\"center\">$n_pessoas</td>");
echo("<td align=\"center\">$data</td>");
echo("<td align=\"center\">$hora</td>");
echo("<td align=\"center\">$cliente</td>");
echo("<td align=\"center\">$funcionario</td></tr>");

}


echo('</table>');

}

else{
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="100%" align="left"><font face="Arial" align="right" size="4">Não foi registrada nenhuma reserva<font><td></tr>');
echo('</table>');
}
mysql_free_result($query);
?>




  </div>
  </div>
  </div>
 </body>

</html>
