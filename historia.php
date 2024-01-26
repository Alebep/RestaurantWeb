<!doctype html>
<html>
 <header>

<title><?php echo $titulo;?> </title>

<link rel="Stylesheet" type="text/css" href="estilo/estilo.css">

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
    <div id="inf_nav">
	<center><h1>Historia</h1></center>
     <?php echo "<font color=\"black\" align=\"justify\"><p>O nosso restaurante foi fundado em  xxxx pelo Sr.yyy.</p><br>
  <p>O nosso restaurante foi fundado pela familia y com o intuito de sastifazer os clientes.Inicialmente foi fundado para ser uma churrasquira simples e projectado para familias da região mais a medida que foi crescendo foi surgundo a necessidade de aumentar pessoal, e os clientes foram exigindo o que fez com que a nossa churrasqueira se transforma-se em restaurante. Depois de inaugaramos o restaurante decidimos abrir outras filias pela cidade, mais com o tempo e o aparecimento da crise financeira algumas das nossas filias foram fechadas. Deste modo pensando numa forma de reverter a situação decidimos criar um software com o intuito de expandir os nosso horizontes e aumentar a nossa visibilidade o mesmo permite uma melhor interacção com os nosso clientes. Deste modo esperamos continuar a crescer apesar das crises que o mundo apresenta, almejamos atingir patamares mais elevados nessa actividade social.
  </p></font>";?>
    </div>
   </div>

   <div id="rodape">
     <p>Todos direitos Reservados</p>
   </div>

  </div>
   
  
 
 </body>


</html>
