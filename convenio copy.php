<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="icon" href="../sesan/logo/icone.png" type="image/png">
<link rel="stylesheet" href="./css/./style.css">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>


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

<form method="POST" name="bancoCV" action="convenio_processa.php"  id="formulariocv" style="text-align: justify;"> 



      <img src="../sesan/logo/logo-1.png" id="logoindex" style="width: 140px;">
<fieldset id="contrato" style="background: #ffff; box-shadow:  1px 1px 4px black; "><legend style="text-align: center;"><b>Dados do contrato</legend>

    <table id="table1_CV" width="100%" border="1"  style="text-align:center;">
<div>
		<tr style="background-color:  #dcdcdc; ">	
			<th>Proc. Lic.</th>
			<th>Proc. Adm.</th>
			<th>Empresa</th>
			<th>N° Contrato</th>
			<th>Ordem de Serviço</th>
			<th>Vigencia Inicial</th>
			</tr>
			<tr>
			<td class="td_CTproceLic"><input type="text" name="td_CTproceLic" id="td_CTproceLic" size=9 required/></td>
			<td class="td_CTprocadm"><input type="text" name="td_CTprocadm" id="td_CTprocadm"  size=9/> 
			<td class="nome"><input type="text" name="nome" id="nome" size=60 /></td>
			<td class="td_CTncontrato"><input type="text"name="td_CTncontrato" id="td_CTncontrato" size=9> </td>
        	<td class="td_CTordemsevCV"><input type="date" name="td_CTordemsevCV" id="td_CTordemsevCV"></td><div>
			<td class="td_CTvigenciaCV"><input type="date" name="td_CTvigenciaCV" id="td_CTvigenciaCV" /></td>
			</tr>
</table>
<table  id="table1.1_CV" width="100%"  border="1" style="text-align:center;">
		<tr style="background-color:  #dcdcdc; ">

			<th>Valor Repasse</th>
			<th>Valor Contrapartida</th>
			<th>Valor Contratual</th>
			<th>Objeto:</th>
		</tr>
		<tr>

			<td class="td_CTrepasseCV"><input type="text" name="td_CTrepasseCV" id="td_CTrepasseCV" size=10/></td>
			<td class="td_CTcontrapartidaCV"><input type="text" name="td_CTcontrapartidaCV" id="td_CTcontrapartidaCV" size=12/></td>
			<td class="td_CTvalorcontratualCV"><input type="text" name="td_CTvalorcontratualCV" id="td_CTvalorcontratualCV" size=12/></td>
			<td class="td_CTobjeto"><input type="text" name="td_CTobjeto" id="td_CTobjeto" size=89/ required></td>
</tr>
</table>
<br>
<fieldset id="termosaditivosCT" style="background: #dcdcdc;  box-shadow:  1px 1px 4px black; ">                                 
        <div class="checkbox" id="termosadtCT" style="text-align: center;">
            <label ><input type="checkbox" name="termosCV" value="termosCV">Termos Aditivos do Contrato</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                                                                                                                        
        </div>

<div class="form-groupCV" style="margin: 0 auto; display: none; " id="divtermos" data-label="termosCV">                                        
<div class="checkbox" id="termosCV"  >
  
	<table id="table2_CV"  border="1" width="100%" style="text-align:center;">

		  <tr style="background-color:  #dcdcdc;">	

			<th>N°</th>
			<th>Proc. Adm.</th>
			<th>Prazo</th>
			<th>Valor</th>
			<th>Paralisação</th>
			<th>Observação</th>   
		 <tr id="linha1">	
			<td class="td_CTTAnumeroCV1"><input type="text" name="td_CTTAnumeroCV1" id="td_CTTAnumeroCV1" size="1"/></td>
			<td class="td_CTTAprocadmCV1"><input type="text" name="td_CTTAprocadmCV1" id="td_CTTAprocadmCV1" size=13/></td>
			<td class="td_CTTAprazoCV1"><input type="date" name="td_CTTAprazoCV1" id="td_CTTAprazoCV1"  /></td>
        	<td for="td_CTTAvalorCV1"><input type="text" name="td_CTTAvalorCV1" id="td_CTTAvalorCV1"  /></td>
			<td class="td_CTTAparalisacaoCV1"><input type="date" name="td_CTTAparalisacaoCV1" id="td_CTTAparalisacaoCV1"  /></td>
        	<td for="td_CTTAobsCV1"><input type="text" name="td_CTTAobsCV1" id="td_CTTAobsCV1" size=38 /></td>
		</tr>
		<tr id="linha2">
			<td class="td_CTTAnumeroCV2"><input type="text" name="td_CTTAnumeroCV2" id="td_CTTAnumeroCV2" size="1"></td>
			<td class="td_CTTAprocadmCV2"><input type="text" name="td_CTTAprocadmCV2" id="td_CTTAprocadmCV2" size=13/></td>
			<td class="td_CTTAprazoCV2"><input type="date" name="td_CTTAprazoCV2" id="td_CTTAprazoCV2"  /></td>
        	<td for="td_CTTAvalorCV2"><input type="text" name="td_CTTAvalorCV2" id="td_CTTAvalorCV2"  /></td>
			<td class="td_CTTAparalisacaoCV2"><input type="date" name="td_CTTAparalisacaoCV2" id="td_CTTAparalisacaoCV2"  /></td>
        	<td for="td_CTTAobsCV2"><input type="text" name="td_CTTAobsCV2" id="td_CTTAobsCV2" size=38 /></td>
    	</tr>
		<tr id="linha3">	
			<td class="td_CTTAnumeroCV3"><input type="text" name="td_CTTAnumeroCV3" id="td_CTTAnumeroCV3" size="1"></td>
			<td class="td_CTTAprocadmCV3"><input type="text" name="td_CTTAprocadmCV3" id="td_CTTAprocadmCV3" size=13/></td>
			<td class="td_CTTAprazoCV3"><input type="date" name="td_CTTAprazoCV3" id="td_CTTAprazoCV3"  /></td>
        	<td for="td_CTTAvalorCV3"><input type="text" name="td_CTTAvalorCV3" id="td_CTTAvalorCV3"  /></td>
			<td class="td_CTTAparalisacaoCV3"><input type="date" name="td_CTTAparalisacaoCV3" id="td_CTTAparalisacaoCV3"  /></td>
        	<td for="td_CTTAobsCV3"><input type="text" name="td_CTTAobsCV3" id="td_CTTAobsCV3" size=38 /></td>
    	</tr>
		</tr>
</table>
</div></div>
</fieldset><br>
</fieldset><br>

<fieldset id="fontes de recurso" style="text-align: center;  box-shadow:  1px 1px 4px black;"><legend><b>Dados do Convênio</legend>
<table id="table1.1_CV" width="100%" border="1" style="text-align:center;">            
<table width="100%" border="1" style="text-align:center; background-color:  #dcdcdc;">
		<tr>
		<th>Órgão Concedente</th>
		<th>Nº do Convênio</th>
		<th colspan="2">Vigência Inicial</th>
		<th>Saldo RP</th>
		<th>Saldo CP</th>
		<th>Saldo Convênio</th>		
		</tr>
		<tr>
			<td class="td_CVorgconcCV"><input type="text" name="td_CVorgconcCV" id="td_CVorgconcCV" size="18" /></td>
			<td class="td_CVnconvCV"><input type="text" name="td_CVnconvCV" id="td_CVnconvCV" size="18" required/></td>
			<td class="td_CVvigenciaCV" colspan="2"><input type="date"name="td_CVvigencia1CV" id="td_CVvigencia1CV" >&nbsp;&nbsp;<input type="date"name="td_CVvigencia2CV" id="td_CVvigencia2CV"> </td>
        	<td for="td_CVsaldoRPCV"><input type="text" name="td_CVsaldoRPCV" id="td_CVsaldoRPCV" size="12"/></td>
			<td class="td_CVsaldoCPCV"><input type="text" name="td_CVsaldoCPCV" id="td_CVsaldoCPCV" size="12" /></td>
        	<td for="td_CVsaldoconvCV"><input type="text" name="td_CVsaldoconvCV" id="td_CVsaldoconvCV" size="12"/></td>
		</tr>
</table><div>
		<h4>Receita do Convênio</h4>
<table width="100%" border="1" style="text-align:center; background-color:  #dcdcdc;">
		<tr >
			<th>N° </th>
			<th>Valor Repasse</th>
			<th>Valor Contrapartida</th>
			<th>Data</th>	
			<th>N°</th>
			<th>Valor Repasse</th>
			<th>Valor Contrapartida</th>
			<th>Data</th>
		    <tr>    	
			<td class="td_CVnumeroreceita1CV"><input type="text" name="td_CVnumeroreceita1CV" id="td_CVnumeroreceita1CV1"  value="1" size=1/></td>
			<td class="td_CVvalorRPreceita1CV"><input type="text" name="td_CVvalorRPreceita1CV" id="td_CVvalorRPreceita1CV" size=10/></td>
			<td class="td_CVvalorCPreceita1CV"><input type="text" name="td_CVvalorCPreceita1CV" id="td_CVvalorCPreceita1CV" size=10 /></td>
			<td class="td_CVdatareceitaCV1"><input type="date" name="td_CVdatareceitaCV1" id="td_CVdatareceitaCV1" /></td>

			<td class="td_CVnumeroreceita4CV"><input type="text" name="td_CVnumeroreceita4CV" id="td_CVnumeroreceita4CV"  value="4" size=1/></td>
			<td class="td_CVvalorRPreceita4CV"><input type="text" name="td_CVvalorRPreceita4CV" id="td_CVvalorRPreceita4CV" size=10/></td>
			<td class="td_CVvalorCPreceita4CV"><input type="text" name="td_CVvalorCPreceita4CV" id="td_CVvalorCPreceita4CV" size=10 /></td>
			<td class="td_CVdatareceita4CV"><input type="date" name="td_CVdatareceita4CV" id="td_CVdatareceita4CV" /></td>
    		</tr>
   			 <tr>    	
			<td class="td_CVnumeroreceita2CV"><input type="text" name="td_CVnumeroreceita2CV" id="td_CVnumeroreceita2CV"  value="2" size=1/></td>
			<td class="td_CVvalorRPreceita2CV"><input type="text" name="td_CVvalorRPreceita2CV" id="td_CVvalorRPreceita2CV" size=10/></td>
			<td class="td_CVvalorCPreceita2CV"><input type="text" name="td_CVvalorCPreceita2CV" id="td_CVvalorCPreceita2CV" size=10 /></td>
			<td class="td_CVdatareceita2CV"><input type="date" name="td_CVdatareceita2CV" id="td_CVdatareceita2CV" /></td>

			<td class="td_CVnumeroreceit5aCV"><input type="text" name="td_CVnumeroreceit5aCV" id="td_CVnumeroreceit5aCV"  value="5" size=1/></td>
			<td class="td_CVvalorRPreceita5CV"><input type="text" name="td_CVvalorRPreceita5CV" id="td_CVvalorRPreceita5CV" size=10/></td>
			<td class="td_CVvalorCPreceita5CV"><input type="text" name="td_CVvalorCPreceita5CV" id="td_CVvalorCPreceita5CV" size=10 /></td>
			<td class="td_CVdatareceita5CV"><input type="date" name="td_CVdatareceita5CV" id="td_CVdatareceita5CV" /></td>
    		</tr>
   			 <tr>    	
			<td class="td_CVnumeroreceita3CV"><input type="text" name="td_CVnumeroreceita3CV" id="td_CVnumeroreceita3CV"  value="3" size=1/></td>
			<td class="td_CVvalorRPreceita3CV"><input type="text" name="td_CVvalorRPreceita3CV" id="td_CVvalorRPreceita3CV" size=10/></td>
			<td class="td_CVvalorCPreceita3CV"><input type="text" name="td_CVvalorCPreceita3CV" id="td_CVvalorCPreceita3CV" size=10 /></td>
			<td class="td_CVdatareceita3CV"><input type="date" name="td_CVdatareceita3CV" id="td_CVdatareceita3CV" /></td>

			<td class="td_CVnumeroreceita6CV"><input type="text" name="td_CVnumeroreceita6CV" id="td_CVnumeroreceita6CV"  value="6" size=1/></td>
			<td class="td_CVvalorRPreceita6CV"><input type="text" name="td_CVvalorRPreceita6CV" id="td_CVvalorRPreceita6CV" size=10/></td>
			<td class="td_CVvalorCPreceita6CV"><input type="text" name="td_CVvalorCPreceita6CV" id="td_CVvalorCPreceita6CV" size=10 /></td>
			<td class="td_CVdatareceita6CV"><input type="date" name="td_CVdatareceita6CV" id="td_CVdatareceitaCV" /></td>
   			</tr>
</table><br>

<fieldset id="termosaditivosCV" style= "box-shadow:  1px 1px 4px black; ">                          
        <div class="checkbox" id="termosadtCV" style="text-align: center;">
            <label ><input type="checkbox" name="termosCV" value="termosCV" >Termos Aditivos do Convênio</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                                                                                                                        
</div>
<div class="form-groupCV" style="margin: 0 auto; display: none;" id="divtermos" data-label="termosCV">                                        
<div class="checkbox" id="termosCV">
<table id="table2_CV"  border="1" width="100%" style="text-align:center; background-color:  #dcdcdc;"" >

		  	<tr>	
			<th>N°</th>
			<th>Prazo</th>
			<th>Valor</th>
			<th>Paralisação</th>
			<th>Observação</th>

		 	<tr id="linha1">	
			<td class="td_CVTAnumero1CV"><input type="text" name="td_CVTAnumero1CV" id="td_CVTAnumero1CV" size="1"></td>
			<td class="td_CVTAprazoRP1"><input type="date" name="td_CVTAprazoRP1" id="td_CVTAprazoRP1"  /></td>
        	<td for="td_CVTAvalor1CV"><input type="text" name="td_CVTAvalor1CV" id="td_CVTAvalor1CV"  /></td>
			<td class="td_CVTAparalisacao1CV"><input type="date" name="td_CVTAparalisacao1CV" id="td_CVTAparalisacao1CV"  /></td>
        	<td for="td_CVTAobs1CV"><input type="text" name="td_CVTAobs1CV" id="td_CVTAobs1CV" size=38 /></td>
			</tr>
			<tr id="linha2">
			<td class="td_CVTAnumero2CV"><input type="text" name="td_CVTAnumero2CV" id="td_CVTAnumero2CV" size="1"></td>
			<td class="td_CVTAprazo2CV"><input type="date" name="td_CVTAprazo2CV" id="td_CVTAprazo2CV"  /></td>
        	<td for="td_CVTAvalor2CV"><input type="text" name="td_CVTAvalor2CV" id="td_CVTAvalor2CV"  /></td>
			<td class="td_CVTAparalisacao2CV"><input type="date" name="td_CVTAparalisacao2CV" id="td_CVTAparalisacao2CV"  /></td>
        	<td for="td_CVTAobs2CV"><input type="text" name="td_CVTAobs2CV" id="td_CVTAobs2CV" size=38 /></td>
    		</tr>
			<tr id="linha3">	
			<td class="td_CVTAnumero3CV"><input type="text" name="td_CVTAnumero3CV" id="td_CVTAnumero3CV" size="1"></td>
			<td class="td_CVTAprazo3CV"><input type="date" name="td_CVTAprazo3CV" id="td_CVTAprazo3CV"  /></td>
        	<td for="td_CVTAvalor3CV"><input type="text" name="td_CVTAvalor3CV" id="td_CVTAvalor3CV"  /></td>
			<td class="td_CVTAparalisacao3CV"><input type="date" name="td_CVTAparalisacao3CV" id="td_CVTAparalisacao3CV"  /></td>
        	<td for="td_CVTAobs3CV"><input type="text" name="td_CVTAobs3CV" id="td_CVTAobs3CV" size=38 /></td>
    		</tr>
	    	</tr>


	</table>
</div></div>
</fieldset><br>
 </fieldset><br>
<fieldset id="boletinsCV" style="background: #ffff; box-shadow:  1px 1px 4px black; "><legend style="text-align: center;"><b>Boletins de Medição</legend><br>
<div>
<table id="table3_CV"  border="1" width="100%" style="text-align:center;">

		 	<tr style="background-color:  #dcdcdc;  ">	
			<th>N°</th>
			<th>N° Proc.</th>
	  		<th>RP</th>
	  		<th>CP</th>
			<th>NE</th>
			<th>NF</th>
			<th colspan="2">Período </th>
			<th>Valor</th>     
			<th>Data Pagamento</th>
			<th>Observação</th>
		 	</tr>
		 	<tr id="linha1CV">	
			<td class="td_BMn1CV"><input type="text" name="td_BMn1CV" id="td_BMn1CV" size="1"></td>
			<td class="td_BMnproc1CV"><input type="text" name="td_BMnproc1CV" id="td_BMnproc1CV" size="5" /></td>
  			<td class="td_BMrepasse1CV"><input type="text" name="td_BMrepasse1CV" id="td_BMrepasse1CV" size="9" ></td>
  			<td class="td_BMcontrapartida1CV"><input type="text" name="td_BMcontrapartida1CV" id="td_BMcontrapartida1CV" size="9"></td>
			<td class="td_BMempenho1CV"><input type="text" name="td_BMempenho1CV" id="td_BMempenho1CV" size="2" /></td>
			<td class="td_BMnotafiscal1CV"><input type="text" name="td_BMnotafiscal1CV" id="td_BMnotafiscal1CV"  size="2"/></td>
			<td class="td_BMperiodo1CV" colspan="2"><input type="date"name="td_BMperiodo1CV" id="td_BMperiodo1CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo11CV" id="td_BMperiodo11CV"> </td>
        	<td><label for="quant1CV"><input type="text"  class="quant1CV"name="quantCV" id="quant1CV" step="0.01" min="0.01" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag1CV"><input type="date" name="td_BMdatapag1CV" id="td_BMdatapag1CV"/></td>
			<td class="td_BMobs_1CV"><input type="text" name="td_BMobs_1CV" id="td_BMobs_1CV" size="6"></td>
			</tr>
			<tr id="linha2">
			<td class="td_BMn2CV"><input type="text" name="td_BMn2CV" id="td_BMn2CV" size="1"></td>
			<td class="td_BMnproc2CV"><input type="text" name="td_BMnproc2CV" id="td_BMnproc2CV" size="5" /></td>
  			<td class="td_BMrepasse2CV"><input type="text" name="td_BMrepasse2CV" id="td_BMrepasse2CV" size="9" ></td>
  			<td class="td_BMcontrapartida2CV"><input type="text" name="td_BMcontrapartida2CV" id="td_BMcontrapartida2CV" size="9"></td>
			<td class="td_BMempenho2CV"><input type="text" name="td_BMempenho2CV" id="td_BMempenho2CV" size="2" /></td>
			<td class="td_BMnotafiscal2CV"><input type="text" name="td_BMnotafiscal2CV" id="td_BMnotafiscal2CV"  size="2"/></td>
			<td class="td_BMperiodo2CV" colspan="2"><input type="date"name="td_BMperiodo2CV" id="td_BMperiodo2CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo22CV" id="td_BMperiodo22CV"> </td>
        	<td><label for="quant2CV"><input type="text"  class="quant2CV"name="quant2CV" id="quant2CV" size="10" onfocus="campValue()" /></td>
			<td class="td_BMdatapag2CV"><input type="date" name="td_BMdatapag2CV" id="td_BMdatapag2CV"/></td>
			<td class="td_BMobs_2CV"><input type="text" name="td_BMobs_2CV" id="td_BMobs_2CV" size="6"></td>
    		</tr>
			<tr id="linha3">	
			<td class="td_BMn3CV"><input type="text" name="td_BMn3CV" id="td_BMn3CV" size="1"></td>
			<td class="td_BMnproc3CV"><input type="text" name="td_BMnproc3CV" id="td_BMnproc3CV" size="5" /></td>
  			<td class="td_BMrepasse3CV"><input type="text" name="td_BMrepasse3CV" id="td_BMrepasse3CV" size="9" ></td>
  			<td class="td_BMcontrapartida3CV"><input type="text" name="td_BMcontrapartida3CV" id="td_BMcontrapartida3CV" size="9"></td>
			<td class="td_BMempenho3CV"><input type="text" name="td_BMempenho3CV" id="td_BMempenho3CV" size="2" /></td>
			<td class="td_BMnotafiscal3CV"><input type="text" name="td_BMnotafiscal3CV" id="td_BMnotafiscal3CV"  size="2"/></td>
			<td class="td_BMperiodo3CV" colspan="2"><input type="date"name="td_BMperiodo3CV" id="td_BMperiodo3CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo33CV" id="td_BMperiodo33CV"> </td>
        	<td><label for="quant3CV"><input type="text"  class="quant3CV"name="quant3CV" id="quant3CV" size="10" onfocus="campValue()" /></td>
			<td class="td_BMdatapag3CV"><input type="date" name="td_BMdatapag3CV" id="td_BMdatapag3CV"/></td>
			<td class="td_BMobs_3CV"><input type="text" name="td_BMobs_3CV" id="td_BMobs_3CV" size="6"></td>
    		</tr>
 			<tr id="linha4">
			<td class="td_BMn4CV"><input type="text" name="td_BMn4CV" id="td_BMn4CV" size="1"></td>
			<td class="td_BMnproc4CV"><input type="text" name="td_BMnproc4CV" id="td_BMnproc4CV" size="5" /></td>
  			<td class="td_BMrepasse4CV"><input type="text" name="td_BMrepasse4CV" id="td_BMrepasse4CV" size="9" ></td>
  			<td class="td_BMcontrapartida4CV"><input type="text" name="td_BMcontrapartida4CV" id="td_BMcontrapartida4CV" size="9"></td>
			<td class="td_BMempenho4CV"><input type="text" name="td_BMempenho4CV" id="td_BMempenho4CV" size="2" /></td>
			<td class="td_BMnotafiscal4CV"><input type="text" name="td_BMnotafiscal4CV" id="td_BMnotafiscal4CV"  size="2"/></td>
			<td class="td_BMperiodo4CV" colspan="2"><input type="date"name="td_BMperiodo4CV" id="td_BMperiodo4CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo44CV" id="td_BMperiodo44CV"> </td>
        	<td><label for="quant4CV"><input type="text"  class="quant4CV"name="quant4CV" id="quant4CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag4CV"><input type="date" name="td_BMdatapag4CV" id="td_BMdatapag4CV"/></td>
			<td class="td_BMobs_4CV"><input type="text" name="td_BMobs_4CV" id="td_BMobs_4CV" size="6"></td>
    		</tr>
			<tr id="linha5">
			<td class="td_BMn5CV"><input type="text" name="td_BMn5CV" id="td_BMn5CV" size="1"></td>
			<td class="td_BMnproc5CV"><input type="text" name="td_BMnproc5CV" id="td_BMnproc5CV" size="5" /></td>
  			<td class="td_BMrepasse5CV"><input type="text" name="td_BMrepasse5CV" id="td_BMrepasse5CV" size="9" ></td>
  			<td class="td_BMcontrapartida5CV"><input type="text" name="td_BMcontrapartida5CV" id="td_BMcontrapartida5CV" size="9"></td>
			<td class="td_BMempenho5CV"><input type="text" name="td_BMempenho5CV" id="td_BMempenho5CV" size="2" /></td>
			<td class="td_BMnotafiscal5CV"><input type="text" name="td_BMnotafiscal5CV" id="td_BMnotafiscal5CV"  size="2"/></td>
			<td class="td_BMperiodo5CV" colspan="2"><input type="date"name="td_BMperiodo5CV" id="td_BMperiodo5CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo55CV" id="td_BMperiodo55CV"> </td>
        	<td><label for="quant5CV"></label><input type="text"  class="quant5CV"name="quantCV" id="quant5CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag5CV"><input type="date" name="td_BMdatapag5CV" id="td_BMdatapag5CV"/></td>
			<td class="td_BMobs_5CV"><input type="text" name="td_BMobs_5CV" id="td_BMobs_5CV" size="6"></td>
			</tr>
		 	<tr id="linha6">
			<td class="td_BMn6CV"><input type="text" name="td_BMn6CV" id="td_BMn6CV" size="1"></td>
			<td class="td_BMnproc6CV"><input type="text" name="td_BMnproc6CV" id="td_BMnproc6CV" size="5" /></td>
  			<td class="td_BMrepasse6CV"><input type="text" name="td_BMrepasse6CV" id="td_BMrepasse6CV" size="9" ></td>
  			<td class="td_BMcontrapartida6CV"><input type="text" name="td_BMcontrapartida6CV" id="td_BMcontrapartida6CV" size="9"></td>
			<td class="td_BMempenho6CV"><input type="text" name="td_BMempenho6CV" id="td_BMempenho6CV" size="2" /></td>
			<td class="td_BMnotafiscal6CV"><input type="text" name="td_BMnotafiscal6CV" id="td_BMnotafiscal6CV"  size="2"/></td>
			<td class="td_BMperiodo6CV" colspan="2"><input type="date"name="td_BMperiodo6CV" id="td_BMperiodo6CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo66CV" id="td_BMperiodo66CV"> </td>
        	<td><label for="quant6CV"></label><input type="text"  class="quant6CV"name="quant6CV" id="quant6CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag6CV"><input type="date" name="td_BMdatapag6CV" id="td_BMdatapag6CV"/></td>
			<td class="td_BMobs_6CV"><input type="text" name="td_BMobs_6CV" id="td_BMobs_6CV" size="6"></td>
			</tr>
			<tr id="linha7">
			<td class="td_BMn7CV"><input type="text" name="td_BMn7CV" id="td_BMn7CV" size="1"></td>
			<td class="td_BMnproc7CV"><input type="text" name="td_BMnproc7CV" id="td_BMnproc7CV" size="5" /></td>
  			<td class="td_BMrepasse7CV"><input type="text" name="td_BMrepasse7CV" id="td_BMrepasse7CV" size="9" ></td>
  			<td class="td_BMcontrapartida7CV"><input type="text" name="td_BMcontrapartida7CV" id="td_BMcontrapartida7CV" size="9"></td>
			<td class="td_BMempenho7CV"><input type="text" name="td_BMempenho7CV" id="td_BMempenho7CV" size="2" /></td>
			<td class="td_BMnotafiscal7CV"><input type="text" name="td_BMnotafiscal7CV" id="td_BMnotafiscal7CV"  size="2"/></td>
			<td class="td_BMperiodo7CV" colspan="2"><input type="date"name="td_BMperiodo7CV" id="td_BMperiodo7CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo77CV" id="td_BMperiodo77CV"> </td>
        	<td><label for="quant7CV"></label><input type="text"  class="quant7CV"name="quant7CV" id="quant7CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag7CV"><input type="date" name="td_BMdatapag7CV" id="td_BMdatapag7CV"/></td>
			<td class="td_BMobs_7CV"><input type="text" name="td_BMobs_7CV" id="td_BMobs_7CV" size="6"></td>
			</tr>
			<tr id="linha8">
			<td class="td_BMn8CV"><input type="text" name="td_BMn8CV" id="td_BMn8CV" size="1"></td>
			<td class="td_BMnproc8CV"><input type="text" name="td_BMnproc8CV" id="td_BMnproc8CV" size="5" /></td>
  			<td class="td_BMrepasse8CV"><input type="text" name="td_BMrepasse8CV" id="td_BMrepasse8CV" size="9" ></td>
  			<td class="td_BMcontrapartida8CV"><input type="text" name="td_BMcontrapartida8CV" id="td_BMcontrapartida8CV" size="9"></td>
			<td class="td_BMempenho8CV"><input type="text" name="td_BMempenho8CV" id="td_BMempenho8CV" size="2" /></td>
			<td class="td_BMnotafiscal8CV"><input type="text" name="td_BMnotafiscal8CV" id="td_BMnotafiscal8CV"  size="2"/></td>
			<td class="td_BMperiodo8CV" colspan="2"><input type="date"name="td_BMperiodo8CV" id="td_BMperiodo8CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo88CV" id="td_BMperiodo8CV"> </td>
        	<td><label for="quant8CV"></label><input type="text"  class="quant8CV"name="quant8CV" id="quant8CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag8CV"><input type="date" name="td_BMdatapag8CV" id="td_BMdatapag8CV"/></td>
			<td class="td_BMobs_8CV"><input type="text" name="td_BMobs_8CV" id="td_BMobs_8CV" size="6"></td>
			</tr>
			<tr id="linha9">
			<td class="td_BMn9CV"><input type="text" name="td_BMn9CV" id="td_BMn9CV" size="1"></td>
			<td class="td_BMnproc9CV"><input type="text" name="td_BMnproc9CV" id="td_BMnproc9CV" size="5" /></td>
  			<td class="td_BMrepasse9CV"><input type="text" name="td_BMrepasse9CV" id="td_BMrepasse9CV" size="9" ></td>
  			<td class="td_BMcontrapartida9CV"><input type="text" name="td_BMcontrapartida9CV" id="td_BMcontrapartida9CV" size="9"></td>
			<td class="td_BMempenho9CV"><input type="text" name="td_BMempenho9CV" id="td_BMempenho9CV" size="2" /></td>
			<td class="td_BMnotafiscal9CV"><input type="text" name="td_BMnotafiscal9CV" id="td_BMnotafiscal9CV"  size="2"/></td>
			<td class="td_BMperiodo9CV" colspan="2"><input type="date"name="td_BMperiodo9CV" id="td_BMperiodo9CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo99CV" id="td_BMperiodo99CV"> </td>
        	<td><label for="quant9CV"></label><input type="text"  class="quant9CV"name="quant9CV" id="quant9CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag9CV"><input type="date" name="td_BMdatapag9CV" id="td_BMdatapag9CV"/></td>
			<td class="td_BMobs_9CV"><input type="text" name="td_BMobs_9CV" id="td_BMobs_9CV" size="6"></td>
			</tr>
			<tr id="linha10">
			<td class="td_BMn10CV"><input type="text" name="td_BMn10CV" id="td_BMn10CV" size="1"></td>
			<td class="td_BMnproc10CV"><input type="text" name="td_BMnproc10CV" id="td_BMnproc10CV" size="5" /></td>
  			<td class="td_BMrepasse10CV"><input type="text" name="td_BMrepasse10CV" id="td_BMrepasse10CV" size="9" ></td>
  			<td class="td_BMcontrapartida10CV"><input type="text" name="td_BMcontrapartida10CV" id="td_BMcontrapartida10CV" size="9"></td>
			<td class="td_BMempenho10CV"><input type="text" name="td_BMempenho10CV" id="td_BMempenho10CV" size="2" /></td>
			<td class="td_BMnotafiscal10CV"><input type="text" name="td_BMnotafiscal10CV" id="td_BMnotafiscal10CV"  size="2"/></td>
			<td class="td_BMperiodo10CV" colspan="2"><input type="date"name="td_BMperiodo10CV" id="td_BMperiodo10CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo1010CV" id="td_BMperiodo1010CV"> </td>
        	<td><label for="quant10CV"></label><input type="text"  class="quant10CV"name="quant10CV" id="quant10CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag10CV"><input type="date" name="td_BMdatapag10CV" id="td_BMdatapag10CV"/></td>
			<td class="td_BMobs_10CV"><input type="text" name="td_BMobs_10CV" id="td_BMobs_10CV" size="6"></td>
			</tr>
			<tr id="linha11">
			<td class="td_BMn11CV"><input type="text" name="td_BMn11CV" id="td_BMn11CV" size="1"></td>
			<td class="td_BMnproc11CV"><input type="text" name="td_BMnproc11CV" id="td_BMnproc11CV" size="5" /></td>
  			<td class="td_BMrepasse11CV"><input type="text" name="td_BMrepasse11CV" id="td_BMrepasse11CV" size="9" ></td>
  			<td class="td_BMcontrapartida11CV"><input type="text" name="td_BMcontrapartida11CV" id="td_BMcontrapartida11CV" size="9"></td>
			<td class="td_BMempenho11CV"><input type="text" name="td_BMempenho11CV" id="td_BMempenho11CV" size="2" /></td>
			<td class="td_BMnotafiscal11CV"><input type="text" name="td_BMnotafiscal11CV" id="td_BMnotafiscal11CV"  size="2"/></td>
			<td class="td_BMperiodo111CV" colspan="2"><input type="date"name="td_BMperiodo111CV" id="td_BMperiodo111CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo1111CV" id="td_BMperiodo1111CV"> </td>
        	<td><label for="quant11CV"></label><input type="text"  class="quant11CV"name="quant11CV" id="quant11CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag11CV"><input type="date" name="td_BMdatapag11CV" id="td_BMdatapag11CV"/></td>
			<td class="td_BMobs_11CV"><input type="text" name="td_BMobs_11CV" id="td_BMobs_11CV" size="6"></td>
			</tr>
			<tr id="linha12">
			<td class="td_BMn12CV"><input type="text" name="td_BMn12CV" id="td_BMn12CV" size="1"></td>
			<td class="td_BMnproc12CV"><input type="text" name="td_BMnproc12CV" id="td_BMnproc12CV" size="5" /></td>
  			<td class="td_BMrepasse12CV"><input type="text" name="td_BMrepasse12CV" id="td_BMrepasse12CV" size="9" ></td>
  			<td class="td_BMcontrapartida12CV"><input type="text" name="td_BMcontrapartida12CV" id="td_BMcontrapartida12CV" size="9"></td>
			<td class="td_BMempenho12CV"><input type="text" name="td_BMempenho12CV" id="td_BMempenho12CV" size="2" /></td>
			<td class="td_BMnotafiscal12CV"><input type="text" name="td_BMnotafiscal12CV" id="td_BMnotafiscal12CV"  size="2"/></td>
			<td class="td_BMperiodo12CV" colspan="2"><input type="date"name="td_BMperiodo12CV" id="td_BMperiodo12CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo1212CV" id="td_BMperiodo1212CV"> </td>
        	<td><label for="quant12CV"></label><input type="text"  class="quant12CV"name="quant12CV" id="quant12CV" size="10" onfocus="campValue()" onfocus="calcula()" /></td>
			<td class="td_BMdatapag12CV"><input type="date" name="td_BMdatapag12CV" id="td_BMdatapag12CV"/></td>
			<td class="td_BMobs_12CV"><input type="text" name="td_BMobs_12CV" id="td_BMobs_12CV" size="6"></td>
			</tr>
			<tr id="linha13">
			<td class="td_BMn13CV"><input type="text" name="td_BMn13CV" id="td_BMn13CV" size="1"></td>
			<td class="td_BMnproc13CV"><input type="text" name="td_BMnproc13CV" id="td_BMnproc13CV" size="5" /></td>
  			<td class="td_BMrepasse13CV"><input type="text" name="td_BMrepasse13CV" id="td_BMrepasse13CV" size="9" ></td>
  			<td class="td_BMcontrapartida13CV"><input type="text" name="td_BMcontrapartida13CV" id="td_BMcontrapartida13CV" size="9"></td>
			<td class="td_BMempenho13CV"><input type="text" name="td_BMempenho13CV" id="td_BMempenho13CV" size="2" /></td>
			<td class="td_BMnotafiscal13CV"><input type="text" name="td_BMnotafiscal13CV" id="td_BMnotafiscal13CV"  size="2"/></td>
			<td class="td_BMperiodo13CV" colspan="2"><input type="date"name="td_BMperiodo13CV" id="td_BMperiodo13CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo1313CV" id="td_BMperiodo1313CV"> </td>
        	<td><label for="quant13CV"></label><input type="text"  class="quant13CV"name="quant13CV" id="quant13CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag13CV"><input type="date" name="td_BMdatapag13CV" id="td_BMdatapag13CV"/></td>
			<td class="td_BMobs_13CV"><input type="text" name="td_BMobs_13CV" id="td_BMobs_13CV" size="6"></td>
			</tr>
			<tr id="linha14">
			<td class="td_BMn14CV"><input type="text" name="td_BMn14CV" id="td_BMn14CV" size="1"></td>
			<td class="td_BMnproc14CV"><input type="text" name="td_BMnproc14CV" id="td_BMnproc14CV" size="5" /></td>
  			<td class="td_BMrepasse14CV"><input type="text" name="td_BMrepasse14CV" id="td_BMrepasse14CV" size="9" ></td>
  			<td class="td_BMcontrapartida14CV"><input type="text" name="td_BMcontrapartida14CV" id="td_BMcontrapartida14CV" size="9"></td>
			<td class="td_BMempenho14CV"><input type="text" name="td_BMempenho14CV" id="td_BMempenho14CV" size="2" /></td>
			<td class="td_BMnotafiscal14CV"><input type="text" name="td_BMnotafiscal14CV" id="td_BMnotafiscal14CV"  size="2"/></td>
			<td class="td_BMperiodo14CV" colspan="2"><input type="date"name="td_BMperiodo14CV" id="td_BMperiodo14CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo1414CV" id="td_BMperiodo1414CV"> </td>
        	<td><label for="quant14CV"></label><input type="text"  class="quant14CV" name="quant14CV" id="quant14CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag14CV"><input type="date" name="td_BMdatapag14CV" id="td_BMdatapag14CV"/></td>
			<td class="td_BMobs_14CV"><input type="text" name="td_BMobs_14CV" id="td_BMobs_14CV" size="6"></td>
			</tr>
			<tr id="linha15">
			<td class="td_BMn15CV"><input type="text" name="td_BMn15CV" id="td_BMn15CV" size="1"></td>
			<td class="td_BMnproc15CV"><input type="text" name="td_BMnproc15CV" id="td_BMnproc15CV" size="5" /></td>
  			<td class="td_BMrepasse15CV"><input type="text" name="td_BMrepasse15CV" id="td_BMrepasse15CV" size="9" ></td>
  			<td class="td_BMcontrapartida15CV"><input type="text" name="td_BMcontrapartida15CV" id="td_BMcontrapartida15CV" size="9"></td>
			<td class="td_BMempenho15CV"><input type="text" name="td_BMempenho15CV" id="td_BMempenho15CV" size="2" /></td>
			<td class="td_BMnotafiscal15CV"><input type="text" name="td_BMnotafiscal15CV" id="td_BMnotafiscal15CV"  size="2"/></td>
			<td class="td_BMperiodo15CV" colspan="2"><input type="date"name="td_BMperiodo15CV" id="td_BMperiodo15CV" >&nbsp;&nbsp;<input type="date"name="td_BMperiodo1515CV" id="td_BMperiodo1515CV"> </td>
        	<td><label for="quant15CV"></label><input type="text"  class="quant15CV"name="quant15CV" id="quant15CV" size="10" onfocus="campValue()"  /></td>
			<td class="td_BMdatapag15CV"><input type="date" name="td_BMdatapag15CV" id="td_BMdatapag15CV"/></td>
			<td class="td_BMobs_15CV"><input type="text" name="td_BMobs_15CV" id="td_BMobs_15CV" size="6"></td>
			</tr>
</table>
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
			<td class="td_ValorTotalContratoCV"><input type="text" name="td_ValorTotalContratoCV" id="td_ValorTotalContratoCV" onfocus="campValue()"></td>
			<td class="td_ValorTotalBoletimCV"><input type="number" name="td_ValorTotalBoletimCV" id="td_ValorTotalBoletimCV" ></td>
			<td class="td_SaldoTotalContratualCV"><input type="text" name="Std_SaldoTotalContratualCV" id="SaldoTotalContratualCV"  /></td>
			<td class="td_VigenciaContratualCV"><input type="date" name="td_VigenciaContratualCV" id="td_VigenciaContratualCV"  /></td>		
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

<script src="./js/valorTab.js">

$('#termosadtCV input[type="checkbox"]').change(function() {/*RECURSO DE ADD CAMPO AO CLICAR NO CHECKBOX DAS FONTES DE RECURSO DO T.A*/
  
  let name = this.value;
  
  $('[data-label=' + name + ']').css('display', this.checked ? '' : 'none');

});

$('#termosadtCT input[type="checkbox"]').change(function() {/*RECURSO DE ADD CAMPO AO CLICAR NO CHECKBOX DAS FONTES DE RECURSO DO T.A*/
  
  let name = this.value;
  
  $('[data-label=' + name + ']').css('display', this.checked ? '' : 'none');

});

/*soma boletins de medição*/
$('.quantCV').on("blur", Soma);

function Soma(){
  var soma = 0;
	$('.quantCV').each(function(){
    var valorItem = parseFloat($(this).val());

    if(!isNaN(valorItem))
      soma += parseFloat(valorItem);
  });
  
  $('#soma').val((soma).toFixed(2));
}



/*script do PDF*/
    function Evento(){
        alert('evento funcionando')
    }


function funcao_pdf() {
  var pegar_dados=document.getElementById('formulariocv').innerHTML;
  var janela = window.open(   '  ' ,'width=180,heigth=300');
  janela.document.write('<html><head>');
  janela.document.write('<title>Departamento Administrativo e Financeiro - SESAN</title></head>');
  janela.document.write('<body>');
  janela.document.write(pegar_dados);
  janela.document.write('</body></html>');
  janela.document.close();
  janela.print();
}
</script>