<?php
if(!empty($_POST) and (empty($_POST['radio']) or empty($_POST['nome']) and empty($_POST['sobrenome']) or empty($_POST['D1']) or empty($_POST['data']) or empty($_POST['D2']) or empty($_POST['telefone']) or empty($_POST['morada']) or empty($_POST['salario']))){
header('Location: Funcionario.php');
}
include ('funcao/ligacao_db.php');
$nome=$_POST['nome'];
$sexo=$_POST['D1'];
$data_n=$_POST['data'];
$sql="insert into Funcionario(Nome,Sexo,Data_nascimento,Funcao,Telefone,Email,Morada,Sobrenome,Salario) values('$nome','$sexo','$data_n','".$_POST['D2']."','".$_POST['telefone']."','".$_POST['email']."','".$_POST['morada']."','".$_POST['sobrenome']."','".$_POST['salario']."');";
$query=mysql_query($sql);
?>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
 </head>
 <body>
 
  <div id="estrutura">

   <?php include ('menu.php');?>



   <div id="principal">
   <?php include('menu4.php')?>
    <div id="inf_nav">
    <?php echo "Cadastro efectuada com sucesso";echo('<a href="Funcionario.php">Clique aqui para continuar</a>');?> 
        
    

  </div>
  </div>
  </div>
 </body>

</html>
