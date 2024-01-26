<!doctype html>
<?php include('verificar_sessao.php');include('verificar_acesso.php');?><html>
 <header>

<title>Visualizar Comida</title>

<link rel="Stylesheet" type="text/css" href="estilo/estilo.css">
<meta charset="utf-8">
</header>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu6.php')?>
    <div id="inf_nav">
     <?php
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$sql='select * from comida';
$query=mysql_query($sql);
if($query){
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="50%" align="center"><font face="Arial" align="right" size="5">Lista de Comidas<font><td></tr>');
echo('</table>');


echo('<table width="850px" align="left" border="0">');
echo('<tr><td width="90px" align="center" bgcolor="99cc33"><font face="Arial" size="1">ID</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Nome</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Descricao</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="1">Preco</font></td>');
while($mostrar=mysql_fetch_array($query)){
$id_comida=$mostrar['id_comida'];
$nome=$mostrar['Nome'];
$desc=$mostrar['descricao'];
$preco=$mostrar['preco'];


echo("<tr><td align=\"center\">$id_comida</td>");
echo("<td align=\"center\">$nome</td>");
echo("<td align=\"center\">$desc</td>");
echo("<td align=\"center\">$preco</td></tr>");

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
  </div>
   
  
 
 </body>


</html>
