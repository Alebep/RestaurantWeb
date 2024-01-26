<?php
$servidor="localhost";$admin="root";$password="";$BD="Restaurante";$Pasta_raiz="http://localhost";
$conn=mysql_connect($servidor,$admin,$password) or die ('erro na conex&atilde;o');
mysql_select_db($BD,$conn);
?>
