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


<script>

$("#LicRP").mask("0000/0000");

$("#td_CTncontratoRP").mask("000/0000");

$("#td_CTvalorRP").mask(" R$ 00.000.000,00");

$("#td_CTTAprocadmRP1").mask("0000/0000");
$("#td_CTTAprocadmRP2").mask("0000/0000");
$("#td_CTTAprocadmRP3").mask("0000/0000");
$("#td_CTTAprocadmRP4").mask("0000/0000");
$("#td_CTTAprocadmRP5").mask("0000/0000");

$("#td_BMnproc1RP").mask("0000/0000");
$("#td_BMnproc2RP").mask("0000/0000");
$("#td_BMnproc3RP").mask("0000/0000");
$("#td_BMnproc4RP").mask("0000/0000");
$("#td_BMnproc5RP").mask("0000/0000");
$("#td_BMnproc6RP").mask("0000/0000");
$("#td_BMnproc7RP").mask("0000/0000");
$("#td_BMnproc8RP").mask("0000/0000");
$("#td_BMnproc9RP").mask("0000/0000");
$("#td_BMnproc10RP").mask("0000/0000");

$("#td_CTTAvalorRP1").mask(" R$ 00.000.000,00");
$("#td_CTTAvalorRP2").mask(" R$ 00.000.000,00");
$("#td_CTTAvalorRP3").mask(" R$ 00.000.000,00");
$("#td_CTTAvalorRP4").mask(" R$ 00.000.000,00");
$("#td_CTTAvalorRP5").mask(" R$ 00.000.000,00");


$("#quantRP1").mask(" R$ 00.000.000,00");
$("#quantRP2").mask(" R$ 00.000.000,00");
$("#quantRP3").mask(" R$ 00.000.000,00");
$("#quantRP4").mask(" R$ 00.000.000,00");
$("#quantRP5").mask(" R$ 00.000.000,00");
$("#quantRP6").mask(" R$ 00.000.000,00");
$("#quantRP7").mask(" R$ 00.000.000,00");
$("#quantRP8").mask(" R$ 00.000.000,00");
$("#quantRP9").mask(" R$ 00.000.000,00");
$("#quantRP10").mask(" R$ 00.000.000,00");

$("#td_ValorTotalContratoRP").mask(" R$ 00.000.000,00");
$("#td_ValorTotalBoletimRP").mask(" R$ 00.000.000,00");
$("#td_SaldoTotalContratualRP").mask(" R$ 00.000.000,00");


</script>


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
<div  >

<section class="formulariocontratos">

<form method="POST" name="bancoRP" action="recursoProprio_processa.php"  id="formulariorp" style="text-align: justify;"> 
      <img src="../sesan/logo/logo-1.png" id="logoindex" style="width: 140px;">
<br>

<fieldset id="contrato" style="background: #ffff; box-shadow:  1px 1px 4px black; "><legend style="text-align: center;"><b>Dados do contrato</legend><br>

    <table id="table1_RP" width="99.8%" border="1" style="text-align:center;">
<div>
		  <tr style="background-color:  #dcdcdc; ">
			
			<th>Proc. Lic.</th>
			<th>Proc. Adm.</th>
			<th>Empresa</th>
			<th>N° Contrato</th>
			<th>Valor do Contrato</th>
			<th>Ordem de Serviço</th>
			<th>Vigência Inicial</th>
 		</tr>
			<tr>
			<td class="td_CTproceLic"><input type="text" name="td_CTproceLic" id="td_CTproceLic" size=9 required/></td>
			<td class="td_CTprocadm"><input type="text" name="td_CTprocadm" id="td_CTprocadm"  size=9/> 
			<td class="nome"><input type="text" name="nome" id="nome" size=39/></td>
			<td class="td_CTncontrato"><input type="text"name="td_CTncontrato" id="td_CTncontrato"" size=9> </td>
			<td class="td_CTvalorRP"><input type="text"name="td_CTvalorRP" id="td_CTvalorRP" size=12> </td>
        	<td class="td_CTordemsevRP"><input type="date" name="td_CTordemsevRP" id="td_CTordemsevRP"></td><div>
			<td class="td_CTvigenciaRP"><input type="date" name="td_CTvigenciaRP" id="td_CTvigenciaRP" /></td>
			</tr>

</table><table  id="table1.1_RP" width="100%"  border="1" style="text-align:center;">
			<tr style="background-color:  #dcdcdc; ">

			<th>Objeto:</th>
			</tr>
			<tr>
			<td class="td_CTobjeto"><input type="text" name="td_CTobjeto" id="td_CTobjeto" size=139/></td>
			</tr>
</div>
</table>
<fieldset id="fontes de recurso" style="text-align: center; background: #ffff;; box-shadow:  1px 1px 4px black;"><legend><b>Fontes de recurso</legend>                                
<div>     
            <label id="recursoRP"style="color:  #f32a2a; ">Recurso Próprio</label>
</div><br>                                      
</fieldset><br>

<fieldset id="termosaditivosRP" style="background: #ffff; box-shadow:  1px 1px 4px black; "><legend style="text-align: center;"><b>Termos Aditivos</legend><br>                                 
        <div class="checkbox" id="termosadtRP" style="text-align: center;">
            <label ><input type="checkbox" name="termosRP" value="termosRP">Informações de Termos Aditivos:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                                                                                                                        
        </div><br>

<div class="form-groupRP" style="margin: 0 auto; display: none;" id="divtermos" data-label="termosRP">                                        
<div class="checkbox" id="termosRP">
  
	<table id="table2_RP"  border="1" width="100%" style="text-align:center;">

			<th>N°</th>
			<th>Proc. Adm.</th>
			<th>Prazo</th>
			<th>Valor</th>
			<th>Paralisação</th>
			<th>Observação</th>   
		 	<tr id="linha1">	
			<td class="td_CTTAnumeroRP1"><input type="text" name="td_CTTAnumeroRP1" id="td_CTTAnumeroRP1" size="1"></td>
			<td class="td_CTTAprocadmRP1"><input type="text" name="td_CTTAprocadmRP1" id="td_CTTAprocadmRP1" size=13/></td>
			<td class="td_CTTAprazoRP1"><input type="date" name="td_CTTAprazoRP1" id="td_CTTAprazoRP1"  /></td>
        	<td for="td_CTTAvalorRP1"><input type="text" name="td_CTTAvalorRP1" id="td_CTTAvalorRP1"  /></td>
			<td class="td_CTTAparalisacaoRP1"><input type="date" name="td_CTTAparalisacaoRP1" id="td_CTTAparalisacaoRP1"  /></td>
        	<td for="td_CTTAobsRP1"><input type="text" name="td_CTTAobsRP1" id="td_CTTAobsRP1" size=38 /></td>
			</tr>
			<tr id="linha2">
			<td class="td_CTTAnumeroRP2"><input type="text" name="td_CTTAnumeroRP2" id="td_CTTAnumeroRP2" size="1"></td>
			<td class="td_CTTAprocadmRP2"><input type="text" name="td_CTTAprocadmRP2" id="td_CTTAprocadmRP2" size=13/></td>
			<td class="td_CTTAprazoRP2"><input type="date" name="td_CTTAprazoRP2" id="td_CTTAprazoRP2"  /></td>
        	<td for="td_CTTAvalorRP2"><input type="text" name="td_CTTAvalorRP2" id="td_CTTAvalorRP2"  /></td>
			<td class="td_CTTAparalisacaoRP2"><input type="date" name="td_CTTAparalisacaoRP2" id="td_CTTAparalisacaoRP2"  /></td>
        	<td for="td_CTTAobsRP2"><input type="text" name="td_CTTAobsRP2" id="td_CTTAobsRP2" size=38 /></td>
    		</tr>
			<tr id="linha3">	
			<td class="td_CTTAnumeroRP3"><input type="text" name="td_CTTAnumeroRP3" id="td_CTTAnumeroRP3" size="1"></td>
			<td class="td_CTTAprocadmRP3"><input type="text" name="td_CTTAprocadmRP3" id="td_CTTAprocadmRP3" size=13/></td>
			<td class="td_CTTAprazoRP3"><input type="date" name="td_CTTAprazoRP3" id="td_CTTAprazoRP3"  /></td>
        	<td for="td_CTTAvalorRP3"><input type="text" name="td_CTTAvalorRP3" id="td_CTTAvalorRP3"  /></td>
			<td class="td_CTTAparalisacaoRP3"><input type="date" name="td_CTTAparalisacaoRP3" id="td_CTTAparalisacaoRP3"  /></td>
        	<td for="td_CTTAobsRP3"><input type="text" name="td_CTTAobsRP3" id="td_CTTAobsRP3" size=38 /></td>
    		</tr>
			<tr id="linha4">	
			<td class="td_CTTAnumeroRP4"><input type="text" name="td_CTTAnumeroRP4" id="td_CTTAnumeroRP4" size="1"></td>
			<td class="td_CTTAprocadmRP4"><input type="text" name="td_CTTAprocadmRP4" id="td_CTTAprocadmRP4" size=13/></td>
			<td class="td_CTTAprazoRP4"><input type="date" name="td_CTTAprazoRP4" id="td_CTTAprazoRP4"  /></td>
        	<td for="td_CTTAvalorRP4"><input type="text" name="td_CTTAvalorRP4" id="td_CTTAvalorRP4"  /></td>
			<td class="td_CTTAparalisacaoRP4"><input type="date" name="td_CTTAparalisacaoRP4" id="td_CTTAparalisacaoRP4"  /></td>
        	<td for="td_CTTAobsRP4"><input type="text" name="td_CTTAobsRP4" id="td_CTTAobsRP4" size=38 /></td>
    		</tr>
			<tr id="linha5">	
			<td class="td_CTTAnumeroRP5"><input type="text" name="td_CTTAnumeroRP5" id="td_CTTAnumeroRP5" size="1"></td>
			<td class="td_CTTAprocadmRP5"><input type="text" name="td_CTTAprocadmRP5" id="td_CTTAprocadmRP5" size=13/></td>
			<td class="td_CTTAprazoRP5"><input type="date" name="td_CTTAprazoRP5" id="td_CTTAprazoRP5"  /></td>
        	<td for="td_CTTAvalorRP5"><input type="text" name="td_CTTAvalorRP5" id="td_CTTAvalorRP5"  /></td>
			<td class="td_CTTAparalisacaoRP5"><input type="date" name="td_CTTAparalisacaoRP5" id="td_CTTAparalisacaoRP5"  /></td>
        	<td for="td_CTTAobsRP5"><input type="text" name="td_CTTAobsRP5" id="td_CTTAobsRP5" size=38 /></td>
    		</tr>
			</tr>

</div></div>
</table>
</fieldset><br>
 
<fieldset id="boletinsRP" style="background: #ffff; box-shadow:  1px 1px 4px black; "><legend style="text-align: center;"><b>Boletins de Medição</legend><br>
<div>
<table id="table3_RP"  border="1" width="100%" style="text-align:center;">

		  <tr style="background-color:  #dcdcdc;  ">	
			<th>N°</th>
			<th>N° Proc.</th>
			<th>NE</th>
			<th>NF</th>
			<th colspan="2">Período </th>
			<th>Valor</th>     
			<th>Data Pagamento</th>
			<th>Observação</th>
		  </tr>
		 	</tr>
		 	<tr id="linha1RP">	
			<td class="td_BMn1RP"><input type="text" name="td_BMn1RP" id="td_BMn1RP" size="1" ></td>
			<td class="td_BMnproc1RP"><input type="text" name="td_BMnproc1RP" id="td_BMnproc1RP" size="10" /></td>
			<td class="td_BMempenho1RP"><input type="text" name="td_BMempenho1RP" id="td_BMempenho1RP" size="8" /></td>
			<td class="td_BMnotafiscal1RP"><input type="text" name="td_BMnotafiscal1RP" id="td_BMnotafiscal1RP"  size="8"/></td>
			<td class="td_BMperiodo1RP" colspan="2"><input type="date"name="td_BMperiodo11RP" id="td_BMperiodo11RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo13RP" id="td_BMperiodo13RP"> </td>
        	<td><label for="quantRP1"></label><input type="text"  class="quantRP1" name="quantRP1" id="quantRP1" size="12"  /></td>
			<td class="td_BMdatapag1RP"><input type="date" name="td_BMdatapag1RP" id="td_BMdatapag1RP" size="10"/></td>
			<td class="td_BMobs_1RP"><input type="text" name="td_BMobs_1RP" id="td_BMobs_1RP" size="10"></td>
			</tr>
			<tr id="linha2RP">
			<td class="td_BMn2RP"><input type="text" name="td_BMn2RP" id="td_BMn2RP" size="1"></td>
			<td class="td_BMnproc2RP"><input type="text" name="td_BMnproc2RP" id="td_BMnproc2RP" size="10" /></td>
			<td class="td_BMempenho2RP"><input type="text" name="td_BMempenho2RP" id="td_BMempenho2RP" size="8" /></td>
			<td class="td_BMnotafiscal2RP"><input type="text" name="td_BMnotafiscal2RP" id="td_BMnotafiscal2RP"  size="8"/></td>
			<td class="td_BMperiodo2RP" colspan="2"><input type="date"name="td_BMperiodo21RP" id="td_BMperiodo21RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo23RP" id="td_BMperiodo23RP"> </td>
        	<td><label for="quantRP2"></label><input type="text"  class="quantRP2"name="quantRP2" id="quantRP2" size="12"  /></td>
			<td class="td_BMdatapag2RP"><input type="date" name="td_BMdatapag2RP" id="td_BMdatapag2RP" size="10"/></td>
			<td class="td_BMobs_2RP"><input type="text" name="td_BMobs_2RP" id="td_BMobs_2RP" size="10"></td>
    		</tr>
			<tr id="linha3">	
			<td class="td_BMn3RP"><input type="text" name="td_BMn3RP" id="td_BMn3RP" size="1"></td>
			<td class="td_BMnproc3RP"><input type="text" name="td_BMnproc3RP" id="td_BMnproc3RP" size="10" /></td>
			<td class="td_BMempenho3RP"><input type="text" name="td_BMempenho3RP" id="td_BMempenho3RP" size="8" /></td>
			<td class="td_BMnotafiscal3RP"><input type="text" name="td_BMnotafiscal3RP" id="td_BMnotafiscal3RP"  size="8"/></td>
			<td class="td_BMperiodo3RP" colspan="2"><input type="date"name="td_BMperiodo31RP" id="td_BMperiodo31RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo33RP" id="td_BMperiodo33RP"> </td>
        	<td><label for="quantRP3"></label><input type="text"  class="quantRP3"name="quantRP3" id="quantRP3" size="12" /></td>
			<td class="td_BMdatapag3RP"><input type="date" name="td_BMdatapag3RP" id="td_BMdatapag3RP" size="10"/></td>
			<td class="td_BMobs_3RP"><input type="text" name="td_BMobs_3RP" id="td_BMobs_3RP" size="10"></td>
    		</tr>
 			<tr id="linha4">
			<td class="td_BMn4RP"><input type="text" name="td_BMn4RP" id="td_BMn4RP" size="1"></td>
			<td class="td_BMnproc4RP"><input type="text" name="td_BMnproc4RP" id="td_BMnproc4RP" size="10" /></td>
			<td class="td_BMempenho4RP"><input type="text" name="td_BMempenho4RP" id="td_BMempenho4RP" size="8" /></td>
			<td class="td_BMnotafiscal4RP"><input type="text" name="td_BMnotafiscal4RP" id="td_BMnotafiscal4RP"  size="8"/></td>
			<td class="td_BMperiodo4RP" colspan="2"><input type="date"name="td_BMperiodo41RP" id="td_BMperiodo41RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo43RP" id="td_BMperiodo43RP"> </td>
        	<td><label for="quantRP4"></label><input type="text"  class="quantRP4"name="quantRP4" id="quantRP4" size="12"  /></td>
			<td class="td_BMdatapag4RP"><input type="date" name="td_BMdatapag4RP" id="td_BMdatapag4RP" size="10"/></td>
			<td class="td_BMobs_4RP"><input type="text" name="td_BMobs_4RP" id="td_BMobs_4RP" size="10"></td>
    		</tr>
			<tr id="linha5">
			<td class="td_BMn5RP"><input type="text" name="td_BMn5RP" id="td_BMn5RP" size="1"></td>
			<td class="td_BMnproc5RP"><input type="text" name="td_BMnproc5RP" id="td_BMnproc5RP" size="10" /></td>
			<td class="td_BMempenho5RP"><input type="text" name="td_BMempenho5RP" id="td_BMempenho5RP" size="8" /></td>
			<td class="td_BMnotafiscal5RP"><input type="text" name="td_BMnotafiscal5RP" id="td_BMnotafiscal5RP"  size="8"/></td>
			<td class="td_BMperiodo5RP" colspan="2"><input type="date"name="td_BMperiodo51RP" id="td_BMperiodo51RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo53RP" id="td_BMperiodo53RP"> </td>
        	<td><label for="quantRP5"></label><input type="text"  class="quantRP5"name="quantRP5" id="quantRP5" size="12" /></td>
			<td class="td_BMdatapag5RP"><input type="date" name="td_BMdatapag5RP" id="td_BMdatapag5RP" size="10"/></td>
			<td class="td_BMobs_5RP"><input type="text" name="td_BMobs_5RP" id="td_BMobs_5RP" size="10"></td>
			</tr>
		 	<tr id="linha6">
			<td class="td_BMn6RP"><input type="text" name="td_BMn6RP" id="td_BMn6RP" size="1"></td>
			<td class="td_BMnproc6RP"><input type="text" name="td_BMnproc6RP" id="td_BMnproc6RP" size="10" /></td>
			<td class="td_BMempenho6RP"><input type="text" name="td_BMempenho6RP" id="td_BMempenho6RP" size="8" /></td>
			<td class="td_BMnotafiscal6RP"><input type="text" name="td_BMnotafiscal6RP" id="td_BMnotafiscal6RP"  size="8"/></td>
			<td class="td_BMperiodo6RP" colspan="2"><input type="date"name="td_BMperiodo61RP" id="td_BMperiodo61RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo63RP" id="td_BMperiodo63RP"> </td>
        	<td><label for="quantRP6"></label><input type="text"  class="quantRP6"name="quantRP6" id="quantRP6" size="12"  /></td>
			<td class="td_BMdatapag6RP"><input type="date" name="td_BMdatapag6RP" id="td_BMdatapag6RP" size="10"/></td>
			<td class="td_BMobs_6RP"><input type="text" name="td_BMobs_6RP" id="td_BMobs_6RP" size="10"></td>
			</tr>
			<tr id="linha7">
			<td class="td_BMn7RP"><input type="text" name="td_BMn7RP" id="td_BMn7RP" size="1"></td>
			<td class="td_BMnproc7RP"><input type="text" name="td_BMnproc7RP" id="td_BMnproc7RP" size="10" /></td>
			<td class="td_BMempenho7RP"><input type="text" name="td_BMempenho7RP" id="td_BMempenho7RP" size="8" /></td>
			<td class="td_BMnotafiscal7RP"><input type="text" name="td_BMnotafiscal7RP" id="td_BMnotafiscal7RP"  size="8"/></td>
			<td class="td_BMperiodo7RP" colspan="2"><input type="date"name="td_BMperiodo71RP" id="td_BMperiodo71RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo73RP" id="td_BMperiodo73RP"> </td>
        	<td><label for="quantRP7"></label><input type="text"  class="quantRP7"name="quantRP7" id="quantRP7" size="12" /></td>
			<td class="td_BMdatapag7RP"><input type="date" name="td_BMdatapag7RP" id="td_BMdatapag7RP" size="10"/></td>
			<td class="td_BMobs_7RP"><input type="text" name="td_BMobs_7RP" id="td_BMobs_7RP" size="10"></td>
			</tr>
			<tr id="linha8">
			<td class="td_BMn8RP"><input type="text" name="td_BMn8RP" id="td_BMn8RP" size="1"></td>
			<td class="td_BMnproc8RP"><input type="text" name="td_BMnproc8RP" id="td_BMnproc8RP" size="10" /></td>
			<td class="td_BMempenho8RP"><input type="text" name="td_BMempenho8RP" id="td_BMempenho8RP" size="8" /></td>
			<td class="td_BMnotafiscal8RP"><input type="text" name="td_BMnotafiscal8RP" id="td_BMnotafiscal8RP"  size="8"/></td>
			<td class="td_BMperiodo8RP" colspan="2"><input type="date"name="td_BMperiodo81RP" id="td_BMperiodo81RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo83RP" id="td_BMperiodo83RP"> </td>
        	<td><label for="quantRP8"></label><input type="text"  class="quantRP8"name="quantRP8" id="quantRP8" size="12" /></td>
			<td class="td_BMdatapag8RP"><input type="date" name="td_BMdatapag8RP" id="td_BMdatapag8RP" size="10"/></td>
			<td class="td_BMobs_8RP"><input type="text" name="td_BMobs_8RP" id="td_BMobs_8RP" size="10"></td>
			</tr>
			<tr id="linha9">
			<td class="td_BMn9RP"><input type="text" name="td_BMn9RP" id="td_BMn9RP" size="1"></td>
			<td class="td_BMnproc9RP"><input type="text" name="td_BMnproc9RP" id="td_BMnproc9RP" size="10" /></td>
			<td class="td_BMempenho9RP"><input type="text" name="td_BMempenho9RP" id="td_BMempenho9RP" size="8" /></td>
			<td class="td_BMnotafiscal9RP"><input type="text" name="td_BMnotafiscal9RP" id="td_BMnotafiscal9RP"  size="8"/></td>
			<td class="td_BMperiodo9RP" colspan="2"><input type="date"name="td_BMperiodo91RP" id="td_BMperiodo91RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo93RP" id="td_BMperiodo93RP"> </td>
        	<td><label for="quant"></label><input type="text"  class="quantRP9"name="quantRP9" id="quantRP9" size="12"  /></td>
			<td class="td_BMdatapag9RP"><input type="date" name="td_BMdatapag9RP" id="td_BMdatapag9RP" size="10"/></td>
			<td class="td_BMobs_9RP"><input type="text" name="td_BMobs_9RP" id="td_BMobs_9RP" size="10"></td>
			</tr>
			<tr id="linha10">
			<td class="td_BMn10RP"><input type="text" name="td_BMn10RP" id="td_BMn10RP" size="1"></td>
			<td class="td_BMnproc10RP"><input type="text" name="td_BMnproc10RP" id="td_BMnproc10RP" size="10" /></td>
			<td class="td_BMempenho10RP"><input type="text" name="td_BMempenho10RP" id="td_BMempenho1RP" size="8" /></td>
			<td class="td_BMnotafiscal10RP"><input type="text" name="td_BMnotafiscal10RP" id="td_BMnotafiscal1RP"  size="8"/></td>
			<td class="td_BMperiodo10RP" colspan="2"><input type="date"name="td_BMperiodo101RP" id="td_BMperiodo101RP" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo103RP" id="td_BMperiodo103RP"> </td>
        	<td><label for="quant"></label><input type="text"  class="quant"name="quant" id="quant" size="12"  /></td>
			<td class="td_BMdatapag10RP"><input type="date" name="td_BMdatapag10RP" id="td_BMdatapag10RP" size="10"/></td>
			<td class="td_BMobs_10RP"><input type="text" name="td_BMobs_10RP" id="td_BMobs_10RP" size="10"></td>
			</tr>
</table><br>
</fieldset><br>

<fieldset>
<div>
<table id="table4_RP"  border="1" width="100%" style="text-align:center;">

		 	<tr style="background-color:  #70e4f3;  ">	
		    <th>VALOR CONTRATUAL</th>
		    <th>VALOR TOTAL EXECUTADO</th>
		    <th>SALDO CONTRATUAL</th>
		    <th>VIGÊNCIA</th>
			</tr>
			</tr>
			<td class="td_ValorTotalContratoRP"><input type="text" name="td_ValorTotalContratoRP" id="td_ValorTotalContratoRP" ></td>
			<td class="td_ValorTotalBoletimRP"><input type="text" id="soma"  name="td_ValorTotalBoletimRP" ></td>
			<td class="td_SaldoTotalContratualRP"><input type="text" name="td_SaldoTotalContratualRP" id="td_SaldoTotalContratualRP"  /></td>
			<td class="td_VigenciaContratualRP"><input type="date" name="td_VigenciaContratualRP" id="td_VigenciaContratualRP"  /></td>	
			</tr>
</table>
</div>
</div>

<div id="botoes" ><br>
  <input type="submit" value="Salvar" class="enviar" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Imprimir" class="enviar" onclick="funcao_pdf()">
</div><br><br><br>
 </div><br><br>
</form>



</body>&nbsp;&nbsp;


<footer>
</footer>
</html>

<script>
$('#termosadtRP input[type="checkbox"]').change(function() {/*RECURSO DE ADD CAMPO AO CLICAR NO CHECKBOX DAS FONTES DE RECURSO DO T.A*/
  
  let name = this.value;
  
  $('[data-label=' + name + ']').css('display', this.checked ? '' : 'none');

});


/*script do PDF*/
    function Evento(){
        alert('evento funcionando')
    }


function funcao_pdf() {
  var pegar_dados=document.getElementById('formulariorp').innerHTML;
  var janela = window.open(   '  ' ,'width=180,heigth=300');
  janela.document.write('<html><head>');
  janela.document.write('<title>Departamento Administrativo e Financeiro - SESAN</title></head>');
  janela.document.write('<body>');
  janela.document.write(pegar_dados);
  janela.document.write('</body></html>');
  janela.document.close();
  janela.print();
}

/*soma boletins de medição*/
$('.quant').on("blur", Soma);

function Soma(){
  var soma = 0;
	$('.quant').each(function(){
    var valorItem = parseFloat($(this).val());

    if(!isNaN(valorItem))
      soma += parseFloat(valorItem);
  });
  
  $('#soma').val((soma).toFixed(2));
}

</script>
