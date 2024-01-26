<?php include "Adiministracao/login.php"?>

  <div id="estrutura">

   <div id="cabecario">
    <img src="imagem/guyjguhgtcyjgty.jpg" width="1024px" height="201"/>
    <table width="99%" border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td align="right" valign="top" width="2"><div id="popup"> <font face="Arial" size="1" color="white">Login</font></div></td>
     </tr>
    </table>
   </div>
<div class="clear"></div>
  <?php include('menu.php');?>
   <div id="principal">

    <div class="gallery autoplay items-3">
     <div id="item-1" class="control-operator"></div>
     <div id="item-2" class="control-operator"></div>
     <div id="item-3" class="control-operator"></div>

     <figure class="item">
      <a href="reservaf.php"><h1><img src="imagem/alebex.jpg" width="1024px" height="400px"/></h1></a>
     </figure>

     <figure class="item">
      <h1><a href="sobre.php"><img src="imagem/IMG_81077534971121.jpeg" width="1024px" height="400px"/></a></h1>
     </figure>

     <figure class="item">
      <a href="Cardapio.php"><img src="imagem/df'grtdfbtrdgbtbrtdg.jpg" width="1024px" height="400px"/></a></h1></h1>
     </figure>

     <div class="controls">
      <a href="#item-1" class="control-button">•</a>
      <a href="#item-2" class="control-button">•</a>
      <a href="#item-3" class="control-button">•</a>
     </div>
    </div>
<table style="width: 100%"><tbody><tr><td><div id="fml">
      <table>
       <table width="425" cellspacing="0" cellpadding="0" border="0" align="top">
       <tr><td align="center"><h2>Take Away</h3><td></tr>
      </table>
      
      <form id="tak" name="tak"method="POST" action="pr_take_away.php">
       
       <table width="425" cellspacing="0" cellpadding="0" border="0" align="left">
        <tr><td align="left"><div id="lv">Nome:</div></td>
        <td><input type="text" id="nome" class="input bradius" required="" name="nome" value="" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /></td>
        <td align="left"><div id="lv">Sobrenome:</div></td>
        <td><input type="text" id="sobrenome" class="input bradius" required="" name="sobrenome" value="" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /></td></tr>
       
        <tr><td align="left"><div id="lv">Email:</div></td>
        <td><input type="text" id="email" class="input bradius" required="" name="email" value="exemplo@exemplo.co.ao"/></td>
        <td align="left"><div id="lv">Telefone:</div></td>
        <td><input type="text" id="telefone" class="input bradius" required="" name="telefone" value="" pattern="[2-9]{1}[0-9]{8}$" /></td></tr>
   
        <tr><td align="left"><div id="lv">Comida:</div></td>
        <td><?php
         include('funcao/ligacao_db.php');
         $sql="select * from comida";
         $m=mysql_query($sql);
         echo "<select class='input bradius' name='comida'/>";
        while($v=mysql_fetch_array($m)){
         echo "<option value='".$v['id_comida']."'>".$v['Nome']." pre&ccedil;o->".$v['preco']."</option>";
}echo "</select>";
?> </td>
        <td align="left"><div id="lv">Quantidade:</div></td>
        <td><input type="number" min="1" max="20" id="quantidade" class="input bradius" name="quantidade" value="1" pattern="[0-9]+$" /></td></tr>
  
      </table>
      
      <center><input type="submit" id="enviar" name="enviar" class="sb bradius" value="Enviar"/></center>    
     </form>

 
   </div>
  </td>
  <td style="margin-top:0" ><a class="tsc_zoom_css"><span class="roll_css1"><img id="delivery" style="width:221px; height:190px" src="imagem/delivery.png" alt="Delivery" border="0" ></img></span></a></td>
  <td style="float: right">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11944.725123795102!2d-8.422061!3d41.543672!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd2a8d70ad3ee91b!2sChurrasqueira+Restaurante+Angolana!5e0!3m2!1spt-BR!2s!4v1417683465064" width="320" height="196" frameborder="0" style="border:0"></iframe>   
  </td>
  </tr></tbody></table>
    
   </div>

   <div id="rodape">
     <p>Todos direitos Reservados</p>
   </div>
<div id="oculto" >
<div id="deliv">
<h2 class="titulo">Delivery</h2> 
<img src="estilo/close.jpg" class="imgi cancelar" />
<?php include 'teste.php';?>
</div>
</div>
  </div>