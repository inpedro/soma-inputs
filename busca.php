<?php include_once"conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="icon" href="../sesan/logo/icone.png" type="image/png">
<link rel="stylesheet" href="../sesan/style.css">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">





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
<br><br><br>


</body>
</html>

<script>
function deletar() {
if (confirm("Deseja realmente deletar esse cadastro?"))
	document.forms[0].submit();
else
	return false}

</script>

<div id="">
<form class="formulariobusca">
<table class="table table-hover" style="width:auto;">
<thead>

<tr>
	<th width="5%" style="text-align:left">Empresa</th>
	<th width="5%" style="text-align:left">Contrato</th>
	<th width="30%" style="text-align:left">Objeto</th>
	<th width="10%" style="text-align:left">Processo Licitatório</th>
	<th width="10%" style="text-align:left">Opção</th>
</tr>

</thead>
	
<?php

$busca = $_GET['busca'];

$result_nomes = "SELECT * FROM recursoproprio JOIN  operacaodecredito  WHERE nome LIKE '%$busca%' ";

//$result_nomes = " SELECT * FROM recursoproprio JOIN operacaodecredito ON recursoproprio.id = operacaodecredito.id" ;


$resultado = mysqli_query($conexao, $result_nomes);

while($linha = mysqli_fetch_array($resultado)){ 

echo '<thead>
	<tr style="background-color:  #dcdcdc; ">

		<th width="20%" style="text-align:left" style="background:#444444;">'.$linha['nome'].'</th>
	<th width="10%" style="text-align:left">'.$linha['td_CTncontrato'].'</th>
	<th width="10%" style="text-align:left">'.$linha['td_CTobjeto'].'</th>
	<th width="10%" style="text-align:left">'.$linha['td_CTproceLic'].'</th>

	<th width="10%" style="text-align:left"><a href="deletar.php?id='.$linha['id'].'" onclick="return deletar()">
	<i class="bi bi-trash"></i>&nbsp;&nbsp;<a href="editarRecursoProprio.php?id='.$linha['id'].'"><i class="bi bi-pencil-square"></i></th>


</tr>
</thead>';
}
echo '</table>';


?>
