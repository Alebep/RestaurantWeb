<html>
<head>
</head>
<body>

 <script type="text/javascript"> 
 function getLocationConstant()
{
    if(navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(onGeoSuccess,onGeoError);  
    } else {
        alert("Your browser or device doesn't support Geolocation");
    }
}

// If we have a successful location update
function onGeoSuccess(event)
{
    document.getElementById("latitude").value =  event.coords.latitude; 
    document.getElementById("longitude").value = event.coords.longitude;

}

// If something has gone wrong with the geolocation request
function onGeoError(event)
{
    alert("Error code " + event.code + ". " + event.message);
}
 </script>
 <form id="delivery" name="delivery" action="pr_delivery.php" method="POST">
  <table width="100%" border="0" cellspacing="15px" cellpadding="0">
  <tbody>
  <tr><td><label for="nome">Nome</label></td><td><input class='input bradius' required="" type="text" id="nome" name="nome" value="" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /></td></tr>
  
  <tr><td><label for="sobrenome">Sobrenome</label></td><td><input class='input bradius' required="" type="text" id="sobrenome" name="sobrenome" value="" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /></td></tr>

  <tr><td><label for="telefone">Telefone</label></td><td><input class='input bradius' required="" type="text" id="telefone" name="telefone" value="" pattern="[2-9]{1}[0-9]{8}$" /></td></tr>
  
  <tr><td><label for="email">Email</label></td><td><input class='input bradius' required="" type="email" id="email" name="email" value="" /></td></tr>

<tr><td><label for="comida">Comida</label></td>
   <td>
   <?php
         $servidor="localhost";$admin="root";$password="";$BD="Restaurante";$Pasta_raiz="http//:localhost";
$conn=mysql_connect($servidor,$admin,$password) or die ('erro na conex&atilde;o');
mysql_select_db($BD,$conn);
         $sql="select * from comida";
         $m=mysql_query($sql);
         echo "<select class='input bradius' id='comida' name='comida'/>";
        while($v=mysql_fetch_array($m)){
         echo "<option value='".$v['id_comida']."'>".$v['Nome']." pre&ccedil;o->".$v['preco']."</option>";
}echo "</select>";
?> </td>
</tr>
  <tr><td><label for="quantidade">Quantidade</label></td><td><input class='input bradius' required="" type="number" id="quantidade" name="quantidade" value="" min="1" max="16" pattern="[0-9]+$" /></td></tr>
	</tbody>
  </table>
  <input type="hidden" id="latitude" name="latitude" value="">
 <input type="hidden" id="longitude" name="longitude" value="">
 <div class="clear"></div>
 <input type="button" value="Localiza&ccedil;&atilde;o" onclick="getLocationConstant()"/>
 <br><br>
 <input type="submit" value="Enviar">
 </form>



</body>
</html>
