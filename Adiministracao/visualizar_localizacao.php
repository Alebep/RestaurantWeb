<?php
if($_POST['latitude'] and $_POST['longitude']){?>
<br /><br />
<h1 class="titulo">Localizacao</h1>
<br /><br />
<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD3Lp5OQbc52fcRjcC90Ay24IWgDIF3RR8&q=<?=$_POST['latitude']?>,<?=$_POST['longitude'];?>" ></iframe>
   <?php
}
?>