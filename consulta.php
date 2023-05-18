<?php
session_start();
//print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))

{
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
  header('Location: index.php');
}
$logado = $_SESSION['email'];


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>SESAN - Obras Públicas</title>
<link rel="icon" href="../sesan/logo/icone.png" type="image/png">
<link rel="stylesheet" href="./css/style.css">

</head>
<body >
<input type="checkbox" id="check">
<label for="check" id="icone" style="left: 5px;"><img src="..//sesan/logo/barra.png"/></label>
<div class="barra">	
	<nav>
		<a href="cadastro.html"><div class="link">Cadastro de usuários</div></a>
		<a href="recursoescolha.php"><div class="link">Cadastro de Contratos</div></a>
		<a href="consulta.php"><div class="link">Consultas</div></a>
		<a href="sair.php"><div class="link">Sair</div></a>
	</nav>	
</div>
<section class="busca" style="text-align: center;">
<form methot="get" name="formbusca" action="busca.php">

   <br><br><br><br><br><br><br><br><br><img src="../sesan/logo/background-rodape.png" id="logoconsulta"><br><br>

      <input type="search"  id="consultid" name="busca" class="input-padrao" required placeholder=" Informe o que procura " required >
<input type="submit" name="" value="buscar" class="enviar" style="width: 65px;" >
     </form>    
</section>
</body>


<footer>
</footer>
</html>
