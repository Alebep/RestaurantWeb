<!doctype html>
<html>
 <header>

<title><?php echo $titulo;?> </title>

<link rel="Stylesheet" type="text/css" href="estilo/estilo.css">
<script type="text/javascript" src="Adiministracao/funcao/jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){
$(".comida").click(function(){
	$(this).parents().children(".desc").toggle("slow");
});
});
</script>
</header>
 <body>
 
  <div id="estrutura">

   <div id="cabecario"> 
     <img src="imagem/guyjguhgtcyjgty.jpg" width="1024px" height="200px"/>
   </div>

   <?php include('menu.php');?>

   <div id="principal">
    <br /><br /><br />
    
     <ul id="navegacao3">
      <li><a href="sobre.php">Quem Somos</a></li>
      <li><a href="Cardapio.php">Cardapio</a></li>
      <li><a href="historia.php">Historia</a></li>
      <li><a href="Qsomos.php">Conctate-nos</a></li>
     </ul>
   
    <div style="overflow-y: hidden;" id="inf_nav">

<center><h1>Cardapio</h1></center>
 
<?php 
$conn=mysql_connect('localhost','root','') or die ('Não foi possivel ligar a base de dados');
mysql_select_db('Restaurante',$conn) or die (mysql_error($conn));
$sql="select * from comida";
$query=mysql_query($sql);
if($query){
echo '<ul id="card">';
	while($mostrar=mysql_fetch_row($query)){
?>
<li>
<h3 class="comida"><?=$mostrar['1']?></h3>
<div class="desc">
	<img src="imagem/<?=$mostrar['4']?>" width="500px" height="300px"></img>
  <p><?=$mostrar['2']?>.</p>
</div>
</li>

<?php 
}
echo '</ul>';
}
mysql_free_result($query);
?> 
    </div>
	<div class="clear"></div>
</div>
<div class="clear"></div>
   <div id="rodape">
     <p>Todos direitos Reservados</p>
   </div>

  </div>
   
  
 
 </body>


</html>
