<!DOCTYPE html>
<html lang="pt-pt">
 <head>
  <meta charset="utf-8"/>
  <link rel="Stylesheet" type="text/css" href="Adiministração/estilo/estilo.css">
  <title><?php echo $titulo;?> </title>
</head>
 <body>

<STYLE type="text/css">
A:link {text-decoration:underline;color:blue;}
A:visited {text-decoration:underline;color:blue;}
A:active {text-decoration:underline;color:blue;}
A:hover {text-decoration:none;color:white;}
</STYLE> 
  <br />
  <h1 class="titulo">RESERVA</h1>
  <form id="reserva" name="reserva" action="processar_reserva.php" method="GET">   
   <table width="10%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td><img src="" width="" height=""></td>
    </tr>
   </table> 
   <table width="100%" border="0" cellspacing="15px" cellpadding="0">
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3"><label for="nome_cliente">Nome</label></font></td>
     <td><input class="inputreserva" type="text" id="nome_cliente" required="" name="nome_cliente" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /><font color="red">*</font></td>
    </tr>
    <tr>
    <td align="left" valign="top"><font face="Arial" size="3"><label for="sobrenome_cliente">Sobrenome</label></font></td>
    <td><input type="text" class="inputreserva" id="sobrenome_cliente" required="" name="sobrenome_cliente" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /><font color="red">*</font></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3"><label for="telefone_cliente">Numero  de telefone</label></font></td>
     <td align="left" valign="top"><input class="inputreserva" type="text" required="" id="telefone_cliente" name="telefone_cliente" pattern="[2-9]{1}[0-9]{8}$" /><font color="red">*</font></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3"><label for="email_cliente">Endere&ccedil;o de correio electr&oacute;nico</label></font></td>
     <td align="left" valign="top"><input class="inputreserva" type="email" required="" id="email_cliente" name="email_cliente"/><font color="red">*</font></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3"><label for="data">Data da reserva</label></font></td>
     <td><input style="border-color: #90B5ED;border-width: 2px;border-style: solid;"  type="date" required="" id="data" name="data" maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2014-12-02" max="2016-12-12"/><font color="red">*</font></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3"><label for="hora">hora</label></font></td>
     <td><input style="border-color: #90B5ED;border-width: 2px;border-style: solid;"  type="time" id="hora" required="" name="hora" maxlength="8" pattern="[0-9]{2}:[0-9]{2} [0-9]{2}$" min="10:30:00" max="23:30:00" /><font color="red">*</font></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3"><label for="numero_de_pessoas">Numero de pessoas</label></font></td>
     <td><input style="border-color: #90B5ED;border-width: 2px;border-style: solid;width: 20%;height:90%"  type="number" required="" min="2" max="15" value="2" id="numero_de_pessoas" name="numeros_de_pessoas" pattern="[0-9]+$" /><font color="red">*</font></td>
    </tr>
    <tr>
     <td><input type="checkbox" id="radio" name="radio" value="sim"><font face="Arial" size="3">Aceitar <a href="termos.php"> termos e condi&ccedil;&otilde;es</a></font></td>
    </tr>
    <tr>
     <td><input type="submit" id="enviar_r" neme="enviar_r" value="Reservar">
     <input type="reset" id="apagar" name="apagar" value="Limpar"></td>
    </tr> 
   </table>
  </form>
 </body>
</html>
