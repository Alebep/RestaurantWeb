<!doctype html>
<?php 
//include('verificar_sessao.php');include('verificar_acesso.php');
?><html>
<html>
<head>
<link rel="Stylesheet" type="text/css" href="estilo/estilo.css" />
<meta charset="utf-8">
</head>
<body>
<div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu6.php')?>
    <div id="inf_nav">    
   
<form name="comida" id="comida" enctype="multipart/form-data" action="pr_comida.php" method="POST">
<table width="100%" border="0" cellspacing="15px" cellpadding="0" >
	<tbody>	
		<tr><td><label>Nome da Comida</label></td><td><input type="text" id="nomec" name="nomec" value="" pattern="[a-z\s]+$" /></td></tr>
		<tr><td><label>Descri&ccedil;&atilde;o</label></td><td><textarea rows="8" cols="40"  id="descc" name="descc" ></textarea></td></tr>
		<tr><td><label>pre&ccedil;o</label></td><td><input type="number" id="precoc" name="precoc" value="" pattern="[0-9]+$"/></td></tr>
		<tr><td><label>Imagem</label></td><td><input type="file" id="arquivo" name="arquivo" /></td></tr>
	</tbody>
</table>
<div class="clear"></div>
		<input type="submit" />
</form>
</div>   
   </div>
  </div>
</body>
</html>
