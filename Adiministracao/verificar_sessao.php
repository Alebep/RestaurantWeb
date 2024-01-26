<?php 
if(isset($_SESSION)){
if(empty($_SESSION['id_usuario'])){
header('location:../index.php');
exit;
}} else session_start();
?>
