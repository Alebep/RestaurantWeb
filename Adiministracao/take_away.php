<!doctype html>
<html>
<?php include('verificar_sessao.php');?>
 <head>
  <title>Take Away(AD)</title>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
<script type="text/javascript" src="funcao/jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){
$(".latlong").click(function(){
	var lat=$(this).children("#lat").text();
	var lng=$(this).children("#long").text();
	$.ajax({url: "visualizar_localizacao.php",type: "POST",data: "latitude="+lat+"&longitude="+lng}).done(function(res){$("#localizacao").html(res);}).fail(function(){$("#localizacao").html("<p>Erro!</p>")});
});
});
</script>
 <head>
 <body>
  <div id="estrutura">
   <?php include('menu.php');?>
   <div id="principal">

     <?php include('menu5.php')?>
    <div id="inf_nav">
     
<?php

$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$sql="select * from servico order by id_servico asc";
$query=mysql_query($sql);
if($query){
echo('<table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">');
echo('<tr><td width="50%" align="center"><font face="Arial" align="right" size="5">Lista Take Away<font><td></tr>');
echo('</table>');


echo('<table width="1230px" align="left" border="0">');
echo('<tr><td width="90px" align="center" bgcolor="99cc33"><font face="Arial" size="2">ID</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Cliente</font></td>');
echo('<td width="150px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Funcionario</font></td>');
echo('<td width="250px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Comida</font></td>');
echo('<td width="100px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Quantidade</font></td>');
echo('<td width="200px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Tipo</font></td>');
echo('<td width="300px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Localizacao</font></td>');
//echo('<td width="250px" align="center" bgcolor="99cc33"><font face="Arial" size="2">Longitude</font></td></tr>');

while($mostrar=mysql_fetch_array($query)){
$id=$mostrar['id_servico'];
$cl=$mostrar['Cliente'];
$sql_b="select * from cliente where id_cliente=".$mostrar['Cliente'];
$query_b=mysql_query($sql_b);
while($mostrar3=mysql_fetch_array($query_b)){$cliente2=$mostrar3['Nome'];}
$Fun=$mostrar['Funcionario'];
$sql_a="select *from Funcionario where id_funcionario=".$mostrar['Funcionario'];
$query_a=mysql_query($sql_a);
while($mostrar4=mysql_fetch_array($query_a)){$Fun2=$mostrar4['Nome'];}
$comida=$mostrar['Comida'];
$sql_c="select *from comida where id_comida=".$mostrar['Comida'];
$query_c=mysql_query($sql_c);
while($mostrar2=mysql_fetch_array($query_c)){$comida2=$mostrar2['Nome'];}
$quantidade=$mostrar['Quantidade'];
$tip=$mostrar['Tipo'];
$sql_d="select *from categoria_ser where id_cat=".$mostrar['Tipo'];
$query_d=mysql_query($sql_d);
while($mostrar5=mysql_fetch_array($query_d)){$tip2=$mostrar5['categoria'];}
$lng=$mostrar['Longitude'];
$lt=$mostrar['Latitude'];


echo("<tr><td align=\"center\">$id</td>");
echo("<td align=\"center\"><a href=\"pr_apg_tk.php?id=$id&cl=$cl&fun=$Fun&cm=$comida&quantidade=$quantidade\">$cliente2</a></td>");
echo("<td align=\"center\">$Fun2</td>");
echo("<td align=\"center\">$comida2</td>");
echo("<td align=\"center\">$quantidade</td>");
echo("<td align=\"center\">$tip2</td>");
echo("<td align=\"center\"><a class='latlong'><span id='lat'>$lt</span> - <span id='long'>$lng</span></a></td>");
//echo("<td align=\"center\"></td>");


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
<div class="clear"></div>
<div id="localizacao"></div>

  </div>   

   </div>

  </div>
 </body>
</html>
