<?php include('verificar_sessao.php');include('verificar_acesso.php');?><html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu4.php')?>
    <div id="inf_nav">
     <form id="Funcionario" name="Funcionario" action="pr_funcionario.php" method="POST">   
   <table width="10%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td><img src="" width="" height=""></td>
    </tr>
   </table> 
   <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Nome</font></td>
     <td><input type="text" id="nome" name="nome" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$" /></td>
    </tr>
    <tr>
    <td align="left" valign="top"><font face="Arial" size="3">Sobrenome</font></td>
    <td><input type="text" id="sobrenome" name="sobrenome" pattern="[a-zA-ZéÈÉáÁãÃ\s]+$"/></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">sexo</font></td>
         <td><input type="radio" name="D1" value="M"><font face="Arial" size="3">Masculino</font><input type="radio" name="D1" value="F"><font face="Arial" size="3">Femenino</font></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Data de Nascimento</font></td>
     <td><input type="date" id="data" name="data" max="1996-12-31" maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Fun&ccedil;&atilde;o</font></td>
     <td><select size="1" name="D2">
      <option selected value="1">Administrador</option> 
      <option value="2">Gerente</option>
      <option value="3">Gar&ccedil;on</option>
     </select><td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Numero  de telefone</font></td>
     <td align="left" valign="top"><input type="text" id="telefone" name="telefone" pattern="[2-9]{1}[0-9]{8}$" /></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Endere&ccedil;o de correio electr&oacute;nico</font></td>
     <td align="left" valign="top"><input type="email" id="email" name="email"/></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Morada</font></td>
     <td><input type="text" id="morada" name="morada"/></td>
    </tr>
    <tr>
     <td align="left" valign="top"><font face="Arial" size="3">Salario</font></td>
     <td><input type="number" min="250" max="2000" value="500" id="salario" name="salario" pattern="[0-9]+$" /></td>
    </tr>
    <tr>
     <td><input type="radio" id="radio" name="radio" value="sim"><font face="Arial" size="3">Aceitar termos e condi&ccedil;&otilde;es</font></td>
    </tr>
    <tr>
     <td><input type="submit" id="enviar_r" name="enviar_r" value="Cadastrar">
     <input type="reset" id="apagar" name="apagar" value="Limpar"></td>
    </tr> 
   </table>
  </form>




  </div>
  </div>
  </div>
 </body>

</html>
