<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<link rel="icon" href="../sesan/logo/icone.png" type="image/png">
<link rel="stylesheet" href="../sesan/css/style.css">

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
<br><br><br>
<div  >

<section class="formulariocontratos"  >

<form method="POST" name="bancoRP" action="operacaoCredito_processa.php" id="formulariocontratos" style="text-align: justify;"> 

      <img src="../sesan/logo/logo-1.png" id="logoindex" style="width: 140px;">
<br>

<fieldset id="contrato" style="background: #ffff; box-shadow:  1px 1px 4px black; "><legend style="text-align: center;"><b>Dados do contrato</legend><br>
    <table id="table1_OPC" width="99.8%" border="1" style="text-align:center;">
<div>
		  <tr style="background-color:  #dcdcdc; ">
			
			<th>Proc. Lic.</th>
			<th>Proc. Adm.</th>
			<th>Empresa</th>
			<th>N° Contrato</th>
			<th>Valor Contratual</th>
			<th>Ordem de Serviço</th>
			<th>Vigencia Inicial</th>
 		</tr>
			<tr >
			<td class="td_CTproceLic"><input type="text" name="td_CTproceLic" id="td_CTproceLic" size=9 required/></td>
			<td class="td_CTprocadm"><input type="text" name="td_CTprocadm" id="td_CTprocadm"  size=9/> 
			<td class="nome"><input type="text" name="nome" id="nome" size=39/></td>
			<td class="td_CTncontrato"><input type="text"name="td_CTncontrato" id="td_CTncontrato" size=9> </td>
			<td class="td_CTvalorOPC"><input type="text"name="td_CTvalorOPC" id="td_CTvalorOPC" size=10 onfocus="valorResult()"> </td>
        	<td class="td_CTordemsevOPC"><input type="date" name="td_CTordemsevOPC" id="td_CTordemsevOPC"></td><div>
			<td class="td_CTvigenciaOPC"><input type="date" name="td_CTvigenciaOPC" id="td_CTvigenciaOPC" /></td>
			</tr>

</table>
<table  id="table1.1_OPC" width="100%"  border="1" style="text-align:center;">
			<tr style="background-color:  #dcdcdc; ">

			<th>Objeto:</th>
			</tr>
			<tr>
			<td class="td_CTobjeto"><input type="text" name="td_CTobjeto" id="td_CTobjeto" size=139 required/></td>
			</tr>
</div>
</table><br>

<fieldset id="fontes de recurso" style="text-align: center; background: #ffff;; box-shadow:  1px 1px 4px black;"><legend><b>Fonte de recurso</legend>
<div > <br>                                    
            <label style="color: red">OPERAÇÃO DE CRÉDITO: </label><input type="text" name="numeroOPC" id="numeroOPC1" size="50"id="labelb" required>
</div><br>                                      

</fieldset><br>
</fieldset>

<fieldset id="termosaditivosOPC" style="background: #ffff; box-shadow:  1px 1px 4px black; "><legend style="text-align: center;"><b>Termos Aditivos</legend><br>                                 
        <div class="checkbox" id="termosadtOPC" style="text-align: center;">
            <label ><input type="checkbox" name="termosOPC" value="termosOPC">Informações de Termos Aditivos:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                                                                                                                        
        </div><br>

<div class="form-groupOPC" style="margin: 0 auto; display: none;" id="divtermos" data-label="termosOPC">                                        
<div class="checkbox" id="termosOPC">
  
	<table id="table2_OPC"  border="1" width="100%" style="text-align:center;">
			<tr style="background-color:  #dcdcdc; ">
			<th>N°</th>
			<th>Proc. Adm.</th>
			<th>Prazo</th>
			<th>Valor</th>
			<th>Paralisação</th>
			<th>Observação</th> 
			</tr>
			<tr>
		 	<tr id="linha1">	
			<td class="td_CTTAnumeroOPC1"><input type="text" name="td_CTTAnumeroOPC1" id="td_CTTAnumeroOPC1" value="1" size="1"></td>
			<td class="td_CTTAprocadmOPC1"><input type="text" name="td_CTTAprocadmOPC1" id="td_CTTAprocadmOPC1" size=13/></td>
			<td class="td_CTTAprazoOPC1"><input type="date" name="td_CTTAprazoOPC1" id="td_CTTAprazoOPC1"  /></td>
        	<td for="td_CTTAvalorOPC1"><input type="text" name="td_CTTAvalorOPC1" id="td_CTTAvalorOPC1"  /></td>
			<td class="td_CTTAparalisacaoOPC1"><input type="date" name="td_CTTAparalisacaoOPC1" id="td_CTTAparalisacaoOPC1"  /></td>
        	<td for="td_CTTAobsOPC1"><input type="text" name="td_CTTAobsOPC1" id="td_CTTAobsOPC1" size=38 /></td>
			</tr>
			<tr id="linha2">
			<td class="td_CTTAnumeroOPC2"><input type="text" name="td_CTTAnumeroOPC2" id="td_CTTAnumeroOPC2" value="2" size="1"></td>
			<td class="td_CTTAprocadmOPC2"><input type="text" name="td_CTTAprocadmOPC2" id="td_CTTAprocadmOPC2" size=13/></td>
			<td class="td_CTTAprazoOPC2"><input type="date" name="td_CTTAprazoOPC2" id="td_CTTAprazoOPC2"  /></td>
        	<td for="td_CTTAvalorOPC2"><input type="text" name="td_CTTAvalorOPC2" id="td_CTTAvalorOPC2"  /></td>
			<td class="td_CTTAparalisacaoOPC2"><input type="date" name="td_CTTAparalisacaoOPC2" id="td_CTTAparalisacaoOPC2"  /></td>
        	<td for="td_CTTAobsOPC2"><input type="text" name="td_CTTAobsOPC2" id="td_CTTAobsOPC2" size=38 /></td>
    		</tr>
			<tr id="linha3">	
			<td class="td_CTTAnumeroOPC3"><input type="text" name="td_CTTAnumeroOPC3" id="td_CTTAnumeroOPC3" value="3" size="1"></td>
			<td class="td_CTTAprocadmOPC3"><input type="text" name="td_CTTAprocadmOPC3" id="td_CTTAprocadmOPC3" size=13/></td>
			<td class="td_CTTAprazoOPC3"><input type="date" name="td_CTTAprazoOPC3" id="td_CTTAprazoOPC3"  /></td>
        	<td for="td_CTTAvalorOPC3"><input type="text" name="td_CTTAvalorOPC3" id="td_CTTAvalorOPC3"  /></td>
			<td class="td_CTTAparalisacaoOPC3"><input type="date" name="td_CTTAparalisacaoOPC3" id="td_CTTAparalisacaoOPC3"  /></td>
        	<td for="td_CTTAobsOPC3"><input type="text" name="td_CTTAobsOPC3" id="td_CTTAobsOPC3" size=38 /></td>
    		</tr>
			<tr id="linha4">	
			<td class="td_CTTAnumeroOPC4"><input type="text" name="td_CTTAnumeroOPC4" id="td_CTTAnumeroOPC4" value="4" size="1"></td>
			<td class="td_CTTAprocadmOPC4"><input type="text" name="td_CTTAprocadmOPC4" id="td_CTTAprocadmOPC4" size=13/></td>
			<td class="td_CTTAprazoOPC4"><input type="date" name="td_CTTAprazoOPC4" id="td_CTTAprazoOPC4"  /></td>
        	<td for="td_CTTAvalorOPC4"><input type="text" name="td_CTTAvalorOPC4" id="td_CTTAvalorOPC4"  /></td>
			<td class="td_CTTAparalisacaoOPC4"><input type="date" name="td_CTTAparalisacaoOPC4" id="td_CTTAparalisacaoOPC4"  /></td>
        	<td for="td_CTTAobsOPC4"><input type="text" name="td_CTTAobsOPC4" id="td_CTTAobsOPC4" size=38 /></td>
    		</tr>
			<tr id="linha5">	
			<td class="td_CTTAnumeroOPC5"><input type="text" name="td_CTTAnumeroOPC5" id="td_CTTAnumeroOPC5" value="5" size="1"></td>
			<td class="td_CTTAprocadmOPC5"><input type="text" name="td_CTTAprocadmOPC5" id="td_CTTAprocadmOPC5" size=13/></td>
			<td class="td_CTTAprazoOPC5"><input type="date" name="td_CTTAprazoOPC5" id="td_CTTAprazoOPC5"  /></td>
        	<td for="td_CTTAvalorOPC5"><input type="text" name="td_CTTAvalorOPC5" id="td_CTTAvalorOPC5"  /></td>
			<td class="td_CTTAparalisacaoOPC5"><input type="date" name="td_CTTAparalisacaoOPC5" id="td_CTTAparalisacaoOPC5"  /></td>
        	<td for="td_CTTAobsOPC5"><input type="text" name="td_CTTAobsOPC5" id="td_CTTAobsOPC5" size=38 /></td>
    		</tr>
			</tr>

</div></div>
</table>
</div></div>
</fieldset><br>
 

<fieldset id="boletinsOPC" style="background: #ffff; box-shadow:  1px 1px 4px black; "><legend style="text-align: center;"><b>Boletins de Medição</legend><br>
<div>
<table id="table3_OPC"  border="1" width="100%" style="text-align:center;">

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
		 	<tr id="linha1OPC">	
			<td class="td_BMn1OPC"><input type="text" name="td_BMn1OPC" id="td_BMn1OPC" size="1"></td>
			<td class="td_BMnproc1OPC"><input type="text" name="td_BMnproc1OPC" id="td_BMnproc1OPC" size="10" /></td>
			<td class="td_BMempenho1OPC"><input type="text" name="td_BMempenho1OPC" id="td_BMempenho1OPC" size="10" /></td>
			<td class="td_BMnotafiscal1OPC"><input type="text" name="td_BMnotafiscal1OPC" id="td_BMnotafiscal1OPC"  size="10"/></td>
			<td class="td_BMperiodo1OPC" colspan="2"><input type="date"name="td_BMperiodo1OPC" id="td_BMperiodo1OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo11OPC" id="td_BMperiodo11OPC"> </td>
        	<td class="td_CTTAvalor1OPC"><input type="text"  class="td_CTTAvalor1OPC valor"name="td_CTTAvalor1OPC" id="td_CTTAvalor1OPC " size="10" onfocus="valorOper()" /></td>
			<td class="td_BMdatapag1OPC"><input type="date" name="td_BMdatapag1OPC" id="td_BMdatapag1OPC" size="10"/></td>
			<td class="td_BMobs_1OPC"><input type="text" name="td_BMobs_1OPC" id="td_BMobs_1OPC" size="10"></td>
			</tr>
			<tr id="linha2OPC">
			<td class="td_BMn2OPC"><input type="text" name="td_BMn2OPC" id="td_BMn2OPC" size="1"></td>
			<td class="td_BMnproc2OPC"><input type="text" name="td_BMnproc2OPC" id="td_BMnproc2OPC" size="10" /></td>
			<td class="td_BMempenho2OPC"><input type="text" name="td_BMempenho2OPC" id="td_BMempenho2OPC" size="10" /></td>
			<td class="td_BMnotafiscal2OPC"><input type="text" name="td_BMnotafiscal2OPC" id="td_BMnotafiscal2OPC"  size="10"/></td>
			<td class="td_BMperiodo2OPC" colspan="2"><input type="date"name="td_BMperiodo2OPC" id="td_BMperiodo2OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo22OPC" id="td_BMperiodo22OPC"> </td>
        	<td class="td_CTTAvalor2OPC"><input type="text"  class="td_CTTAvalor2OPC valor"name="td_CTTAvalor2OPC" id="td_CTTAvalor2OPC " size="10" onfocus="valorOper()" /></td>
			<td class="td_BMdatapag2OPC"><input type="date" name="td_BMdatapag2OPC" id="td_BMdatapag2OPC" size="10"/></td>
			<td class="td_BMobs_2OPC"><input type="text" name="td_BMobs_2OPC" id="td_BMobs_2OPC" size="10"></td>
    		</tr>
			<tr id="linha3OPC">	
			<td class="td_BMn3OPC"><input type="text" name="td_BMn3OPC" id="td_BMn3OPC" size="1"></td>
			<td class="td_BMnproc3OPC"><input type="text" name="td_BMnproc3OPC" id="td_BMnproc3OPC" size="10" /></td>
			<td class="td_BMempenho3OPC"><input type="text" name="td_BMempenho3OPC" id="td_BMempenho3OPC" size="10" /></td>
			<td class="td_BMnotafiscal3OPC"><input type="text" name="td_BMnotafiscal3OPC" id="td_BMnotafiscal3OPC"  size="10"/></td>
			<td class="td_BMperiodo3OPC" colspan="2"><input type="date"name="td_BMperiodo3OPC" id="td_BMperiodo3OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo33OPC" id="td_BMperiodo33OPC"> </td>
        	<td class="td_CTTAvalor3OPC"><input type="text"  class="td_CTTAvalor3OPC valor"name="td_CTTAvalor3OPC" id="td_CTTAvalor3OPC " size="10" onfocus="valorOper()"/></td>			
			<td class="td_BMdatapag3OPC"><input type="date" name="td_BMdatapag3OPC" id="td_BMdatapag3OPC" size="10"/></td>
			<td class="td_BMobs_3OPC"><input type="text" name="td_BMobs_3OPC" id="td_BMobs_3OPC" size="10"></td>
    		</tr>
 			<tr id="linhaOPC4">
			<td class="td_BMn4OPC"><input type="text" name="td_BMn4OPC" id="td_BMn4OPC" size="1"></td>
			<td class="td_BMnproc4OPC"><input type="text" name="td_BMnproc4OPC" id="td_BMnproc4OPC" size="10" /></td>
			<td class="td_BMempenho4OPC"><input type="text" name="td_BMempenho4OPC" id="td_BMempenho4OPC" size="10" /></td>
			<td class="td_BMnotafiscal4OPC"><input type="text" name="td_BMnotafiscal4OPC" id="td_BMnotafiscal4OPC"  size="10"/></td>
			<td class="td_BMperiodo4OPC" colspan="2"><input type="date"name="td_BMperiodo4OPC" id="td_BMperiodo4OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo44OPC" id="td_BMperiodo44OPC"> </td>
        	<td class="td_CTTAvalor4OPC"><input type="text"  class="td_CTTAvalor4OPC valor"name="td_CTTAvalor4OPC" id="td_CTTAvalor4OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag4OPC"><input type="date" name="td_BMdatapag4OPC" id="td_BMdatapag4OPC" size="10"/></td>
			<td class="td_BMobs_4OPC"><input type="text" name="td_BMobs_4OPC" id="td_BMobs_4OPC" size="10"></td>
    		</tr>
			<tr id="linhaOPC5">
			<td class="td_BMn5OPC"><input type="text" name="td_BMn5OPC" id="td_BMn5OPC" size="1"></td>
			<td class="td_BMnproc5OPC"><input type="text" name="td_BMnproc5OPC" id="td_BMnproc5OPC" size="10" /></td>
			<td class="td_BMempenho5OPC"><input type="text" name="td_BMempenho5OPC" id="td_BMempenho5OPC" size="10" /></td>
			<td class="td_BMnotafiscal5OPC"><input type="text" name="td_BMnotafiscal5OPC" id="td_BMnotafiscal5OPC"  size="10"/></td>
			<td class="td_BMperiodo5OPC" colspan="2"><input type="date"name="td_BMperiodo5OPC" id="td_BMperiodo5OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo55OPC" id="td_BMperiodo55OPC"> </td>
        	<td class="td_CTTAvalor5OPC"><input type="text"  class="td_CTTAvalor5OPC valor"name="td_CTTAvalor5OPC" id="td_CTTAvalor5OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag5OPC"><input type="date" name="td_BMdatapag5OPC" id="td_BMdatapag5OPC" size="10"/></td>
			<td class="td_BMobs_5OPC"><input type="text" name="td_BMobs_5OPC" id="td_BMobs_5OPC" size="10"></td>
			</tr>
		 	<tr id="linhaOPC5">
			<td class="td_BMn6OPC"><input type="text" name="td_BMn6OPC" id="td_BMn6OPC" size="1"></td>
			<td class="td_BMnproc6OPC"><input type="text" name="td_BMnproc6OPC" id="td_BMnproc6OPC" size="10" /></td>
			<td class="td_BMempenho6OPC"><input type="text" name="td_BMempenho6OPC" id="td_BMempenho6OPC" size="10" /></td>
			<td class="td_BMnotafiscal6OPC"><input type="text" name="td_BMnotafiscal6OPC" id="td_BMnotafiscal6OPC"  size="10"/></td>
			<td class="td_BMperiodo6OPC" colspan="2"><input type="date"name="td_BMperiodo6OPC" id="td_BMperiodo6OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo66OPC" id="td_BMperiodo66OPC"> </td>
        	<td class="td_CTTAvalor6OPC"><input type="text"  class="td_CTTAvalor6OPC valor"name="td_CTTAvalor6OPC" id="td_CTTAvalor6OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag6OPC"><input type="date" name="td_BMdatapag6OPC" id="td_BMdatapag6OPC" size="10"/></td>
			<td class="td_BMobs_6OPC"><input type="text" name="td_BMobs_6OPC" id="td_BMobs_6OPC" size="10"></td>
			</tr>
			<tr id="linha7OPC">
			<td class="td_BMn7OPC"><input type="text" name="td_BMn7OPC" id="td_BMn7OPC" size="1"></td>
			<td class="td_BMnproc7OPC"><input type="text" name="td_BMnproc7OPC" id="td_BMnproc7OPC" size="10" /></td>
			<td class="td_BMempenho7OPC"><input type="text" name="td_BMempenho7OPC" id="td_BMempenho7OPC" size="10" /></td>
			<td class="td_BMnotafiscal7OPC"><input type="text" name="td_BMnotafiscal7OPC" id="td_BMnotafiscal7OPC"  size="10"/></td>
			<td class="td_BMperiodo7OPC" colspan="2"><input type="date"name="td_BMperiodo7OPC" id="td_BMperiodo7OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo77OPC" id="td_BMperiodo77OPC"> </td>
        	<td class="td_CTTAvalor7OPC"><input type="text"  class="td_CTTAvalor7OPC valor"name="td_CTTAvalor7OPC" id="td_CTTAvalor7OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag7OPC"><input type="date" name="td_BMdatapag7OPC" id="td_BMdatapag7OPC" size="10"/></td>
			<td class="td_BMobs_7OPC"><input type="text" name="td_BMobs_7OPC" id="td_BMobs_7OPC" size="10"></td>
			</tr>
			<tr id="linha8OPC">
			<td class="td_BMn8OPC"><input type="text" name="td_BMn8OPC" id="td_BMn8OPC" size="1"></td>
			<td class="td_BMnproc8OPC"><input type="text" name="td_BMnproc8OPC" id="td_BMnproc8OPC" size="10" /></td>
			<td class="td_BMempenho8OPC"><input type="text" name="td_BMempenho8OPC" id="td_BMempenho8OPC" size="10" /></td>
			<td class="td_BMnotafiscal8OPC"><input type="text" name="td_BMnotafiscal8OPC" id="td_BMnotafiscal8OPC"  size="10"/></td>
			<td class="td_BMperiodo8OPC" colspan="2"><input type="date"name="td_BMperiodo8OPC" id="td_BMperiodo8OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo88OPC" id="td_BMperiodo88OPC"> </td>
        	<td class="td_CTTAvalor8OPC"><input type="text"  class="td_CTTAvalor8OPC valor"name="td_CTTAvalor8OPC" id="td_CTTAvalor8OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag8OPC"><input type="date" name="td_BMdatapag8OPC" id="td_BMdatapag8OPC" size="10" /></td>
			<td class="td_BMobs_8OPC"><input type="text" name="td_BMobs_8OPC" id="td_BMobs_8OPC" size="10"></td>
			</tr>
			<tr id="linha9OPC">
			<td class="td_BMn9OPC"><input type="text" name="td_BMn9OPC" id="td_BMn9OPC" size="1"></td>
			<td class="td_BMnproc9OPC"><input type="text" name="td_BMnproc9OPC" id="td_BMnproc9OPC" size="10" /></td>
			<td class="td_BMempenho9OPC"><input type="text" name="td_BMempenho9OPC" id="td_BMempenho9OPC" size="10" /></td>
			<td class="td_BMnotafiscal9OPC"><input type="text" name="td_BMnotafiscal9OPC" id="td_BMnotafiscal9OPC"  size="10"/></td>
			<td class="td_BMperiodo9OPC" colspan="2"><input type="date"name="td_BMperiodo9OPC" id="td_BMperiodo9OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo99OPC" id="td_BMperiodo99OPC"> </td>
        	<td class="td_CTTAvalor9OPC"><input type="text"  class="td_CTTAvalor9OPC valor"name="td_CTTAvalor9OPC" id="td_CTTAvalor9OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag9OPC"><input type="date" name="td_BMdatapag9OPC" id="td_BMdatapag9OPC" size="10"/></td>
			<td class="td_BMobs_9OPC"><input type="text" name="td_BMobs_9OPC" id="td_BMobs_9OPC" size="10"></td>
			</tr>
			<tr id="linha10OPC">
			<td class="td_BMn10OPC"><input type="text" name="td_BMn10OPC" id="td_BMn10OPC" size="1"></td>
			<td class="td_BMnproc10OPC"><input type="text" name="td_BMnproc10OPC" id="td_BMnproc10OPC" size="10" /></td>
			<td class="td_BMempenho10OPC"><input type="text" name="td_BMempenho10OPC" id="td_BMempenho1OPC" size="10" /></td>
			<td class="td_BMnotafiscal10OPC"><input type="text" name="td_BMnotafiscal10OPC" id="td_BMnotafiscal1OPC"  size="10"/></td>
			<td class="td_BMperiodo10OPC" colspan="2"><input type="date"name="td_BMperiodo10OPC" id="td_BMperiodo10OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo1010OPC" id="td_BMperiodo1010OPC"> </td>
        	<td class="td_CTTAvalor10OPC"><input type="text"  class="td_CTTAvalor10OPC valor"n valorame="td_CTTAvalor10OPC" id="td_CTTAvalor10OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag10OPC"><input type="date" name="td_BMdatapag10OPC" id="td_BMdatapag10OPC" size="10"/></td>
			<td class="td_BMobs_10OPC"><input type="text" name="td_BMobs_10OPC" id="td_BMobs_10OPC" size="10"></td>
			</tr>
			<tr id="linha11">
			<td class="td_BMn11OPC"><input type="text" name="td_BMn11OPC" id="td_BMn11OPC" size="1"></td>
			<td class="td_BMnproc11OPC"><input type="text" name="td_BMnproc11OPC" id="td_BMnproc11OPC" size="10" /></td>
			<td class="td_BMempenho11OPC"><input type="text" name="td_BMempenho11OPC" id="td_BMempenho11OPC" size="10" /></td>
			<td class="td_BMnotafiscal11OPC"><input type="text" name="td_BMnotafiscal11OPC" id="td_BMnotafiscal11OPC"  size="10"/></td>
			<td class="td_BMperiodo11OPC" colspan="2"><input type="date"name="td_BMperiodo1111OPC" id="td_BMperiodo1111OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo111OPC" id="td_BMperiodo111OPC"> </td>
        	<td class="td_CTTAvalor11OPC"><input type="text"  class="td_CTTAvalor11OPC valor"n valorame="td_CTTAvalor11OPC" id="td_CTTAvalor11OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag11OPC"><input type="date" name="td_BMdatapag11OPC" id="td_BMdatapag11OPC" size="10"/></td>
			<td class="td_BMobs_11OPC"><input type="text" name="td_BMobs_11OPC" id="td_BMobs_11OPC" size="10"></td>
			</tr>
			<tr id="linha12">
			<td class="td_BMn12OPC"><input type="text" name="td_BMn12OPC" id="td_BMn12OPC" size="1"></td>
			<td class="td_BMnproc12OPC"><input type="text" name="td_BMnproc12OPC" id="td_BMnproc12OPC" size="10" /></td>
			<td class="td_BMempenho12OPC"><input type="text" name="td_BMempenho12OPC" id="td_BMempenho12OPC" size="10" /></td>
			<td class="td_BMnotafiscal12OPC"><input type="text" name="td_BMnotafiscal12OPC" id="td_BMnotafiscal12OPC"  size="10"/></td>
			<td class="td_BMperiodo12OPC" colspan="2"><input type="date"name="td_BMperiodo12OPC" id="td_BMperiodo12OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo1212OPC" id="td_BMperiodo1212OPC"> </td>
        	<td class="td_CTTAvalor12OPC"><input type="text"  class="td_CTTAvalor12OPC valor" n valorame="td_CTTAvalor12OPC" id="td_CTTAvalor12OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag21OPC"><input type="date" name="td_BMdatapag21OPC" id="td_BMdatapag21OPC" size="10"/></td>
			<td class="td_BMobs_12OPC"><input type="text" name="td_BMobs_12OPC" id="td_BMobs_12OPC" size="10"></td>
			</tr>
			<tr id="linha13">
			<td class="td_BMn13OPC"><input type="text" name="td_BMn13OPC" id="td_BMn13OPC" size="1"></td>
			<td class="td_BMnproc13OPC"><input type="text" name="td_BMnproc13OPC" id="td_BMnproc13OPC" size="10" /></td>
			<td class="td_BMempenho13OPC"><input type="text" name="td_BMempenho13OPC" id="td_BMempenho13OPC" size="10" /></td>
			<td class="td_BMnotafiscal13OPC"><input type="text" name="td_BMnotafiscal13OPC" id="td_BMnotafiscal13OPC"  size="10"/></td>
			<td class="td_BMperiodo13OPC" colspan="2"><input type="date"name="td_BMperiodo13OPC" id="td_BMperiodo13OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo1313OPC" id="td_BMperiodo1313OPC"> </td>
        	<td class="td_CTTAvalor13OPC"><input type="text"  class="td_CTTAvalor13OPC valor"n valorame="td_CTTAvalor13OPC" id="td_CTTAvalor13OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag13OPC"><input type="date" name="td_BMdatapag13OPC" id="td_BMdatapag13OPC" size="10"/></td>
			<td class="td_BMobs_13OPC"><input type="text" name="td_BMobs_13OPC" id="td_BMobs_13OPC" size="10"></td>
			</tr>
			<tr id="linha14">
			<td class="td_BMn14OPC"><input type="text" name="td_BMn14OPC" id="td_BMn14OPC" size="1"></td>
			<td class="td_BMnproc14OPC"><input type="text" name="td_BMnproc14OPC" id="td_BMnproc14OPC" size="10" /></td>
			<td class="td_BMempenho14OPC"><input type="text" name="td_BMempenho14OPC" id="td_BMempenho14OPC" size="10" /></td>
			<td class="td_BMnotafiscal14OPC"><input type="text" name="td_BMnotafiscal14OPC" id="td_BMnotafiscal14OPC"  size="10"/></td>
			<td class="td_BMperiodo14OPC" colspan="2"><input type="date"name="td_BMperiodo14OPC" id="td_BMperiodo14OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo1414OPC" id="td_BMperiodo1414OPC"> </td>
        	<td class="td_CTTAvalor14OPC"><input type="text"  class="td_CTTAvalor14OPC valor"n valorame="td_CTTAvalor14OPC" id="td_CTTAvalor14OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag14OPC"><input type="date" name="td_BMdatapag14OPC" id="td_BMdatapag1OPC" size="10"/></td>
			<td class="td_BMobs_14OPC"><input type="text" name="td_BMobs_14OPC" id="td_BMobs_14OPC" size="10"></td>
			</tr>
			<tr id="linha15">
			<td class="td_BMn15OPC"><input type="text" name="td_BMn15OPC" id="td_BMn15OPC" size="1"></td>
			<td class="td_BMnproc15OPC"><input type="text" name="td_BMnproc15OPC" id="td_BMnproc15OPC" size="10" /></td>
			<td class="td_BMempenho15OPC"><input type="text" name="td_BMempenho15OPC" id="td_BMempenho15OPC" size="10" /></td>
			<td class="td_BMnotafiscal15OPC"><input type="text" name="td_BMnotafiscal15OPC" id="td_BMnotafiscal15OPC"  size="10"/></td>
			<td class="td_BMperiodo15OPC" colspan="2"><input type="date"name="td_BMperiodo15OPC" id="td_BMperiodo15OPC" >&nbsp;&nbsp;
<input type="date"name="td_BMperiodo150OPC" id="td_BMperiodo150OPC"> </td>
        	<td class="td_CTTAvalor15OPC"><input type="text"  class="td_CTTAvalor15OPC valor"n valorame="td_CTTAvalor15OPC" id="td_CTTAvalor15OPC " size="10" onfocus="valorOper()"/></td>
			<td class="td_BMdatapag15OPC"><input type="date" name="td_BMdatapag15OPC" id="td_BMdatapag1OPC" size="10"/></td>
			<td class="td_BMobs_15OPC"><input type="text" name="td_BMobs_15OPC" id="td_BMobs_15OPC" size="10"></td>
			</tr>
</table><br>
</fieldset><br>

<fieldset>
<div>
<table id="table4_OPC"  border="1" width="100%" style="text-align:center;">

		 	<tr style="background-color:  #70e4f3;  ">	
		    <th>VALOR CONTRATUAL</th>
		    <th>VALOR TOTAL EXECUTADO</th>
		    <th>SALDO CONTRATUAL</th>
		    <th>VIGÊNCIA</th>
			</tr>
			</tr>
			<td class="td_ValorTotalContratoOPC"><input type="text" name="td_ValorTotalContratoOPC" id="td_ValorTotalContratoOPC"  onblur="valorOper()"></td>
			<td class="td_ValorTotalBoletimOPC"><input type="text" id="td_ValorTotalBoletimOPC" name="td_ValorTotalBoletimOPC" id="td_ValorTotalBoletimOPC" onblur="valorOper()"></td>
			<td class="td_SaldoTotalContratualOPC"><input type="text" name="td_SaldoTotalContratualOPC" id="td_SaldoTotalContratualOPC" onblur="valorResult()" /></td>
			<td class="td_vigenciaContratualOPC"><input type="text" name="td_vigenciaContratualOPC" id="td_vigenciaContratualOPC" /></td>	
			</tr>
</table>
</div>
</fieldset>
</div>

<div id="botoes" ><br>
  <input type="submit" value="Salvar" class="enviar" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Imprimir" class="enviar" onclick="funcao_pdf()">
</div><br><br><br>
 </div><br><br>
</form>

<footer>


</footer>
<script src="./js/valorContrato.js"></script>
</html>


<script>

	

$('#opccredito input[type="checkbox"]').change(function() {/*RECURSO DE ADD CAMPO AO CLICAR NO CHECKBOX DAS FONTES DE RECURSO DA OPC*/
  
  let name = this.value;
  
  $('[data-label=' + name + ']').css('display', this.checked ? '' : 'none');

});




$('#termosadtOPC input[type="checkbox"]').change(function() {/*RECURSO DE ADD CAMPO AO CLICAR NO CHECKBOX DAS FONTES DE RECURSO DO T.A*/
  
  let name = this.value;
  
  $('[data-label=' + name + ']').css('display', this.checked ? '' : 'none');

});



/*script do PDF*/
    function Evento(){
        alert('evento funcionando')
    }


function funcao_pdf() {
  var pegar_dados=document.getElementById('formulariocontratos').innerHTML;
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
$('.quantOPC').on("blur", Soma);

function Soma(){
  var soma = 0;
	$('.quantOPC').each(function(){
    var valorItem = parseFloat($(this).val());

    if(!isNaN(valorItem))
      soma += parseFloat(valorItem);
  });
  
  $('#soma').val((soma).toFixed(2));
}
</script>