<?php
if(isset($_SESSION)){
if($_SESSION['grau']!=1){
header('location:acesso.php');
exit;
}} 

?>