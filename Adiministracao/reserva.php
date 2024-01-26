<!DOCTYPE html>
<html lang="pt-pt">
 <head>
  <meta charset="utf-8"/>
  <link rel="Stylesheet" type="text/css" href="estilo/estilo.css">
  <title><?php echo $titulo;?> </title>
</head>
 <body>
  <br />
  <form id="reserva" name="reserva" action="processar_reserva.php" method="GET">   
   <table width="10%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td><img src="" width="" height=""></td>
    </tr>
   </table> 
   <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Nome</font></td>
     <td><input type="text" id="nome_cliente" name="nome_cliente" pattern="[a-z\s]+$" required="" /></td>
    </tr>
    <tr>
    <td align="left" valign="top"><font face="Arial" size="3">Sobrenome</font></td>
    <td><input type="text" id="sobrenome_cliente" name="sobrenome_cliente" pattern="[a-z\s]+$" required="" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Numero  de telefone</font></td>
     <td align="left" valign="top"><input type="text" id="telefone_cliente" name="telefone_cliente" pattern="[2-9]{1}[0-9]{8}$" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Endere&ccedil;o de correio electr&oacute;nico</font></td>
     <td align="left" valign="top"><input type="email" id="email_cliente" name="email_cliente"/></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Data da reserva</font></td>
     <td><input type="date" id="data" name="data" maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2014-12-02" max="2016-12-12" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">hora</font></td>
     <td><input type="time" id="hora" name="hora" maxlength="8" pattern="[0-9]{2}:[0-9]{2} [0-9]{2}$" min="10:30:00" max="23:30:00" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Numero de pessoas</font></td>
     <td><input type="number" min="2" max="15" value="2" id="numero_de_pessoas" name="numeros_de_pessoas" pattern="[0-9]+$" /></td>
    </tr>
    <tr>
     <td><input type="radio" id="radio" name="radio" value="sim"><font face="Arial" size="3">Aceitar termos e condi&ccedil;&otilde;es</font></td>
    </tr>
    <tr>
     <td><input type="submit" id="enviar_r" name="enviar_r" value="Reservar">
     <input type="reset" id="apagar" name="apagar" value="Limpar"></td>
    </tr> 
   </table>
  </form>
 </body>
</html>
