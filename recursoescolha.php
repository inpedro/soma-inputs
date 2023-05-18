
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
</div>
<section class="" ><br><br><br><br><br><br>
<label style="font-size: 25px;  text-align:center; background: #ffff; box-shadow:  1px 1px 4px black;"><b>Informe o Recurso do Contrato</b></label><br><br>
<select name="unidade" id="unidade" onChange="AbrirSecao(this.value)" style="font-size: 20px; background: #ffff; box-shadow:  1px 1px 4px black;">

    <option value="" selected>Selecionar...</option>
    <option value="convenio.php">Convenio</option>
    <option value="operacao.php">Operação de Crédito</option>
    <option value="recursoProprio.php">Recurso Próprio</option>
</select>
</section>
</body>
<script>
            function AbrirSecao(secao){
                window.open(""+secao+"", "_parent");
            }
</script>
</html>
