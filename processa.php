<?php


include_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$niveldeacesso = $_POST['niveldeacesso'];

$sql = "insert into usuarios (nome, email, senha, niveldeacesso) values ('$nome','$email', '$senha', '$niveldeacesso')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);


?>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="icon" href="../sesan/logo/icone.png" type="image/png">
<link rel="stylesheet" href="./css/style.css">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
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
<br><br><br>

    <br>
<div class="container">

   <br><br>
<section class="simnao">
<?php

if($linhas == 1) {
    print "Cadastro efetuado com sucesso!";
}else{
    print "Cadastro não efetuado. Já exite um usuário com este e-mail.";
}

?>
      

</section>

</div>

</body>


</html>
