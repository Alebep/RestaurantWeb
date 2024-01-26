<!doctype html>
<html>
 <head>
<title><?php $titulo='Minha pagina'; echo $titulo;?> </title>
<link rel="Stylesheet" type="text/css" href="Adiministracao/estilo/estilo.css">
<link rel="Stylesheet" type="text/css" href="Adiministracao/estilo/login.css">

<link rel="stylesheet" href="estilo/gallery.prefixed.css"> 
<link  rel ="Stylesheet"   href="estilo/gallery.theme.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script type="text/javascript" src="Adiministracao/funcao/jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){
<?php
if(isset($_GET['user']) and isset($_GET['estado'])){if($_GET['estado']==='reserva'){ ?>
alert("<?=$_GET['user']?> a sua reserva foi efectuada com sucesso.");
<?php }elseif($_GET['estado']==='takeaway'){?>
alert("<?=$_GET['user']?> O seu take away foi efectuado com sucesso pode pegar a sua comida dentro de 10 minutos");
<?php }elseif($_GET['estado']==='delivery'){?>
alert("<?=$_GET['user']?> o seu pedido sera entregue brevemente.");
<?php }elseif($_GET['estado']==='erro'){?>
alert("<?=$_GET['user']?> Falha no envio.");
<?php } } ?>
$("#popup").click(function() {
$("#areaoculta").css({'display':'block','height':($(document).height())+'px'});
});
$(".cancelar").click(function() {
$("#areaoculta").css("display", "none");
});

$("#delivery").click(function() {
$("#oculto").css({'display':'block','height':($(document).height())+'px'});
});
$(".cancelar").click(function() {
$("#oculto").css("display", "none");
});
});
</script>
<meta charset="utf-8"/>
</head>
 <body>


<?php
include "pprincipal.php";
?>
 
 
 </body>


</html>
