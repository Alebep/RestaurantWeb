<!doctype html>
<html>
 <header>

<title><?php echo $titulo;?> </title>

<link rel="Stylesheet" type="text/css" href="estilo/estilo.css">
<link rel="Stylesheet" type="text/css" href="Adiministracao\estilo\login.css">
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
     <center><h1>Conctate-nos</h1></center>

      <form name="mensagem" id="mensagem" action="pr_m.php" method="POST">
       <table width="100%" border="0" cellspacing="15px" cellpadding="0" >
	    <tbody>	
			 <tr><td><label for="nome">Nome</label></td><td><input class='input bradius' required="" type="text" id="nome" name="nome" value="" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /></td></tr>
             <tr><td><label for="telefone">Telefone</label></td><td><input class='input bradius' required="" type="text" id="telefone" name="telefone" value="" pattern="[2-9]{1}[0-9]{8}$" /></td></tr>
             <tr><td><label for="email">Email</label></td><td><input class='input bradius' required="" type="email" id="email" name="email" value="" /></td></tr>
             <tr><td><label for="nome">Tipo de Mensagem</label></td><td>
			   <select required="" class='input bradius' id='tipo' name='tipo'/>
			    <option value="elogio">Elogio</option>
			    <option value="critica">Critica</option>
				<option value="recomendacao">Recomenda&ccedil;&atilde;o</option>
				<option value="reclamacao">Reclama&ccedil;&atilde;o</option>
				<option value="Outros">Outros</option>  
			    </select>
			 </td></tr>			 
			 <tr><td><label>Mensagem</label></td><td><textarea rows="8"  class='input bradius' cols="40" required=""  id="mensagem" name="mensagem" ></textarea></td></tr>
	    </tbody>
		</table>
<div class="clear"></div>
		<center><input type="submit" class="sb bradius" /></center>
</form>


    
 



    </div>
   </div>

   <div id="rodape">
     <p>Todos direitos Reservados</p>
   </div>

  </div>
   
  
 
 </body>


</html>
