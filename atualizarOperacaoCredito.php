<?php include_once"conexao.php"; ?>


<?php

    $id = $_POST['id'];

$PROCLICITATORIOopc = $_POST['td_CTproceLic'];
$PROCADMopc = $_POST['td_CTprocadm'];
$nome = $_POST['nome'];
$NCONTRATOopc = $_POST['td_CTncontrato'];
$VALORCTopc = $_POST['td_CTvalorOPC'];
$ORDEMSERVopc = $_POST['td_CTordemsevOPC'];
$VIGENCIAINICIALopc = $_POST['td_CTvigenciaOPC'];

$OBJETOopc = $_POST['td_CTobjeto'];

$Nopc = $_POST['numeroOPC'];

$NTERMOADT1opc = $_POST['td_CTTAnumeroOPC1'];
$PROCTA1opc = $_POST['td_CTTAprocadmOPC1'];
$PRAZOTA1opc = $_POST['td_CTTAprazoOPC1'];
$VALORTA1opc = $_POST['td_CTTAvalorOPC1'];
$PARALISACAOTA1opc = $_POST['td_CTTAparalisacaoOPC1'];
$OBSTA1opc = $_POST['td_CTTAobsOPC1'];

$NTERMOADT2opc = $_POST['td_CTTAnumeroOPC2'];
$PROCTA2opc = $_POST['td_CTTAprocadmOPC2'];
$PRAZOTA2opc = $_POST['td_CTTAprazoOPC2'];
$VALORTA2opc = $_POST['td_CTTAvalorOPC2'];
$PARALISACAOTA2opc = $_POST['td_CTTAparalisacaoOPC2'];
$OBSTA2opc = $_POST['td_CTTAobsOPC2'];

$NTERMOADT3opc = $_POST['td_CTTAnumeroOPC3'];
$PROCTA3opc = $_POST['td_CTTAprocadmOPC3'];
$PRAZOTA3opc = $_POST['td_CTTAprazoOPC3'];
$VALORTA3opc = $_POST['td_CTTAvalorOPC3'];
$PARALISACAOTA3opc = $_POST['td_CTTAparalisacaoOPC3'];
$OBSTA3opc = $_POST['td_CTTAobsOPC3'];

$NTERMOADT4opc = $_POST['td_CTTAnumeroOPC4'];
$PROCTA4opc = $_POST['td_CTTAprocadmOPC4'];
$PRAZOTA4opc = $_POST['td_CTTAprazoOPC4'];
$VALORTA4opc = $_POST['td_CTTAvalorOPC4'];
$PARALISACAOTA4opc = $_POST['td_CTTAparalisacaoOPC4'];
$OBSTA4opc = $_POST['td_CTTAobsOPC4'];

$NTERMOADT5opc = $_POST['td_CTTAnumeroOPC5'];
$PROCTA5opc = $_POST['td_CTTAprocadmOPC5'];
$PRAZOTA5opc = $_POST['td_CTTAprazoOPC5'];
$VALORTA5opc = $_POST['td_CTTAvalorOPC5'];
$PARALISACAOTA5opc = $_POST['td_CTTAparalisacaoOPC5'];
$OBSTA5opc = $_POST['td_CTTAobsOPC5'];


 

$NBM1opc = $_POST['td_BMn1OPC'];
$PROCADM1opc = $_POST['td_BMnproc1OPC'];
$NE1opc = $_POST['td_BMempenho1OPC'];
$NF1opc = $_POST['td_BMnotafiscal1OPC'];
$PERIDO1opc = $_POST['td_BMperiodo1OPC'];
$PERIODO11opc = $_POST['td_BMperiodo11OPC'];
$VALOR1opc = $_POST['td_CTTAvalor1OPC'];
$DATAPAG1opc = $_POST['td_BMdatapag1OPC'];
$OBS1opc = $_POST['td_BMobs_1OPC'];

$NBM2opc = $_POST['td_BMn2OPC'];
$PROCADM2opc = $_POST['td_BMnproc2OPC'];
$NE2opc = $_POST['td_BMempenho2OPC'];
$NF2opc = $_POST['td_BMnotafiscal2OPC'];
$PERIDO2opc = $_POST['td_BMperiodo2OPC'];
$PERIODO22opc = $_POST['td_BMperiodo22OPC'];
$VALOR2opc = $_POST['td_CTTAvalor2OPC'];
$DATAPAG2opc = $_POST['td_BMdatapag2OPC'];
$OBS2opc = $_POST['td_BMobs_2OPC'];

$NBM3opc = $_POST['td_BMn3OPC'];
$PROCADM3opc = $_POST['td_BMnproc3OPC'];
$NE3opc = $_POST['td_BMempenho3OPC'];
$NF3opc = $_POST['td_BMnotafiscal3OPC'];
$PERIDO3opc = $_POST['td_BMperiodo3OPC'];
$PERIODO33opc = $_POST['td_BMperiodo33OPC'];
$VALOR3opc = $_POST['td_CTTAvalor3OPC'];
$DATAPAG3opc = $_POST['td_BMdatapag3OPC'];
$OBS3opc = $_POST['td_BMobs_3OPC'];

$NBM4opc = $_POST['td_BMn4OPC'];
$PROCADM4opc = $_POST['td_BMnproc4OPC'];
$NE4opc = $_POST['td_BMempenho4OPC'];
$NF4opc = $_POST['td_BMnotafiscal4OPC'];
$PERIDO4opc = $_POST['td_BMperiodo4OPC'];
$PERIODO44opc = $_POST['td_BMperiodo44OPC'];
$VALOR4opc = $_POST['td_CTTAvalor4OPC'];
$DATAPAG4opc = $_POST['td_BMdatapag4OPC'];
$OBS4opc = $_POST['td_BMobs_4OPC'];

$NBM5opc = $_POST['td_BMn5OPC'];
$PROCADM5opc = $_POST['td_BMnproc5OPC'];
$NE5opc = $_POST['td_BMempenho5OPC'];
$NF5opc = $_POST['td_BMnotafiscal5OPC'];
$PERIDO5opc = $_POST['td_BMperiodo5OPC'];
$PERIODO55opc = $_POST['td_BMperiodo55OPC'];
$VALOR5opc = $_POST['td_CTTAvalor5OPC'];
$DATAPAG5opc = $_POST['td_BMdatapag5OPC'];
$OBS5opc = $_POST['td_BMobs_5OPC'];

$NBM6opc = $_POST['td_BMn6OPC'];
$PROCADM6opc = $_POST['td_BMnproc6OPC'];
$NE6opc = $_POST['td_BMempenho6OPC'];
$NF6opc = $_POST['td_BMnotafiscal6OPC'];
$PERIDO6opc = $_POST['td_BMperiodo6OPC'];
$PERIODO66opc = $_POST['td_BMperiodo66OPC'];
$VALOR6opc = $_POST['td_CTTAvalor6OPC'];
$DATAPAG6opc = $_POST['td_BMdatapag6OPC'];
$OBS6opc = $_POST['td_BMobs_6OPC'];

$NBM7opc = $_POST['td_BMn7OPC'];
$PROCADM7opc = $_POST['td_BMnproc7OPC'];
$NE7opc = $_POST['td_BMempenho7OPC'];
$NF7opc = $_POST['td_BMnotafiscal7OPC'];
$PERIDO7opc = $_POST['td_BMperiodo7OPC'];
$PERIODO77opc = $_POST['td_BMperiodo77OPC'];
$VALOR7opc = $_POST['td_CTTAvalor7OPC'];
$DATAPAG7opc = $_POST['td_BMdatapag7OPC'];
$OBS7opc = $_POST['td_BMobs_7OPC'];

$NBM8opc = $_POST['td_BMn8OPC'];
$PROCADM8opc = $_POST['td_BMnproc8OPC'];
$NE8opc = $_POST['td_BMempenho8OPC'];
$NF8opc = $_POST['td_BMnotafiscal8OPC'];
$PERIDO8opc = $_POST['td_BMperiodo8OPC'];
$PERIODO88opc = $_POST['td_BMperiodo88OPC'];
$VALOR8opc = $_POST['td_CTTAvalor8OPC'];
$DATAPAG8opc = $_POST['td_BMdatapag8OPC'];
$OBS8opc = $_POST['td_BMobs_8OPC'];

$NBM9opc = $_POST['td_BMn9OPC'];
$PROCADM9opc = $_POST['td_BMnproc9OPC'];
$NE9opc = $_POST['td_BMempenho9OPC'];
$NF9opc = $_POST['td_BMnotafiscal9OPC'];
$PERIDO9opc = $_POST['td_BMperiodo9OPC'];
$PERIODO99opc = $_POST['td_BMperiodo99OPC'];
$VALOR9opc = $_POST['td_CTTAvalor9OPC'];
$DATAPAG9opc = $_POST['td_BMdatapag9OPC'];
$OBS9opc = $_POST['td_BMobs_9OPC'];

$NBM10opc = $_POST['td_BMn10OPC'];
$PROCADM10opc = $_POST['td_BMnproc10OPC'];
$NE10opc = $_POST['td_BMempenho10OPC'];
$NF10opc = $_POST['td_BMnotafiscal10OPC'];
$PERIDO10opc = $_POST['td_BMperiodo10OPC'];
$PERIODO100opc = $_POST['td_BMperiodo1010OPC'];
$VALOR10opc = $_POST['td_CTTAvalor10OPC'];
$DATAPAG10opc = $_POST['td_BMdatapag10OPC'];
$OBS10opc = $_POST['td_BMobs_10OPC'];

$NBM11opc = $_POST['td_BMn11OPC'];
$PROCADM11opc = $_POST['td_BMnproc11OPC'];
$NE11opc = $_POST['td_BMempenho11OPC'];
$NF11opc = $_POST['td_BMnotafiscal11OPC'];
$PERIDO11opc = $_POST['td_BMperiodo1111OPC'];
$PERIODO111opc = $_POST['td_BMperiodo111OPC'];
$VALOR11opc = $_POST['td_CTTAvalor11OPC'];
$DATAPAG11opc = $_POST['td_BMdatapag11OPC'];
$OBS11opc = $_POST['td_BMobs_11OPC'];

$NBM12opc = $_POST['td_BMn12OPC'];
$PROCADM12opc = $_POST['td_BMnproc12OPC'];
$NE12opc = $_POST['td_BMempenho12OPC'];
$NF12opc = $_POST['td_BMnotafiscal12OPC'];
$PERIDO12opc = $_POST['td_BMperiodo12OPC'];
$PERIODO122opc = $_POST['td_BMperiodo1212OPC'];
$VALOR12opc = $_POST['td_CTTAvalor12OPC'];
$DATAPAG12opc = $_POST['td_BMdatapag21OPC'];
$OBS12opc = $_POST['td_BMobs_12OPC'];

$NBM13opc = $_POST['td_BMn13OPC'];
$PROCADM13opc = $_POST['td_BMnproc13OPC'];
$NE13opc = $_POST['td_BMempenho13OPC'];
$NF13opc = $_POST['td_BMnotafiscal13OPC'];
$PERIDO13opc = $_POST['td_BMperiodo13OPC'];
$PERIODO133opc = $_POST['td_BMperiodo1313OPC'];
$VALOR13opc = $_POST['td_CTTAvalor13OPC'];
$DATAPAG13opc = $_POST['td_BMdatapag13OPC'];
$OBS13opc = $_POST['td_BMobs_13OPC'];

$NBM14opc = $_POST['td_BMn14OPC'];
$PROCADM14opc = $_POST['td_BMnproc14OPC'];
$NE14opc = $_POST['td_BMempenho14OPC'];
$NF14opc = $_POST['td_BMnotafiscal14OPC'];
$PERIDO14opc = $_POST['td_BMperiodo14OPC'];
$PERIODO144opc = $_POST['td_BMperiodo1414OPC'];
$VALOR14opc = $_POST['td_CTTAvalor14OPC'];
$DATAPAG14opc = $_POST['td_BMdatapag14OPC'];
$OBS14opc = $_POST['td_BMobs_14OPC'];

$NBM15opc = $_POST['td_BMn15OPC'];
$PROCADM15opc = $_POST['td_BMnproc15OPC'];
$NE15opc = $_POST['td_BMempenho15OPC'];
$NF15opc = $_POST['td_BMnotafiscal15OPC'];
$PERIDO15opc = $_POST['td_BMperiodo15OPC'];
$PERIODO155opc = $_POST['td_BMperiodo150OPC'];
$VALOR15opc = $_POST['td_CTTAvalor15OPC'];
$DATAPAG15opc = $_POST['td_BMdatapag15OPC'];
$OBS15opc = $_POST['td_BMobs_15OPC'];


$TOTALCTopc = $_POST['td_ValorTotalContratoOPC'];
$TOTALBMopc = $_POST['td_ValorTotalBoletimOPC'];
$TOTALSALDOopc = $_POST['td_SaldoTotalContratualOPC'];
$VIGENCIAopc = $_POST['td_vigenciaContratualOPC'];


$sql = "UPDATE operacaodecredito SET  td_CTproceLic= '$PROCLICITATORIOopc', td_CTprocadm = '$PROCADMopc', nome = '$nome', 
td_CTncontrato= '$NCONTRATOopc', td_CTvalorOPC = '$VALORCTopc', td_CTordemsevOPC = '$ORDEMSERVopc', td_CTvigenciaOPC = '$VIGENCIAINICIALopc', 
td_CTobjeto= '$OBJETOopc', numeroOPC = '$Nopc', 

td_CTTAnumeroOPC1 = '$NTERMOADT1opc', td_CTTAprocadmOPC1 = '$PROCTA1opc', td_CTTAprazoOPC1 = '$PRAZOTA1opc', td_CTTAvalorOPC1 = '$VALORTA1opc', 
td_CTTAparalisacaoOPC1 = '$PARALISACAOTA1opc', td_CTTAobsOPC1 = '$OBSTA1opc', 

td_CTTAnumeroOPC2 = '$NTERMOADT2opc', td_CTTAprocadmOPC2 = '$PROCTA2opc', td_CTTAprazoOPC2 = '$PRAZOTA2opc', td_CTTAvalorOPC2 = '$VALORTA2opc', 
td_CTTAparalisacaoOPC2 = '$PARALISACAOTA2opc', td_CTTAobsOPC2 = '$OBSTA2opc', 

td_CTTAnumeroOPC3 = '$NTERMOADT3opc', td_CTTAprocadmOPC3 = '$PROCTA3opc', td_CTTAprazoOPC3 = '$PRAZOTA3opc', td_CTTAvalorOPC3 = '$VALORTA3opc', 
td_CTTAparalisacaoOPC3 = '$PARALISACAOTA3opc', td_CTTAobsOPC3 = '$OBSTA3opc', 



td_CTTAnumeroOPC4 = '$NTERMOADT4opc', td_CTTAprocadmOPC4 = '$PROCTA4opc', td_CTTAprazoOPC4 = '$PRAZOTA4opc', td_CTTAvalorOPC4 = '$VALORTA4opc', 
td_CTTAparalisacaoOPC4 = '$PARALISACAOTA4opc', td_CTTAobsOPC4 = '$OBSTA4opc',

td_CTTAnumeroOPC5 = '$NTERMOADT5opc', td_CTTAprocadmOPC5 = '$PROCTA5opc', td_CTTAprazoOPC5 = '$PRAZOTA5opc', td_CTTAvalorOPC5 = '$VALORTA5opc', 
td_CTTAparalisacaoOPC5 = '$PARALISACAOTA5opc', td_CTTAobsOPC5 = '$OBSTA5opc', 


td_BMn1OPC = '$NBM1opc', td_BMnproc1OPC = '$PROCADM1opc', td_BMempenho1OPC = '$NE1opc', td_BMnotafiscal1OPC = '$NF1opc', td_BMperiodo1OPC = '$PERIDO1opc', 
td_BMperiodo11OPC = '$PERIODO11opc', td_CTTAvalor1OPC = '$VALOR1opc', td_BMdatapag1OPC = '$DATAPAG1opc', td_BMobs_1OPC = '$OBS1opc',

td_BMn2OPC = '$NBM2opc', td_BMnproc2OPC = '$PROCADM2opc', td_BMempenho2OPC = '$NE2opc', td_BMnotafiscal2OPC = '$NF2opc', td_BMperiodo2OPC = '$PERIDO2opc', 
td_BMperiodo22OPC = '$PERIODO22opc', td_CTTAvalor2OPC = '$VALOR2opc', td_BMdatapag2OPC = '$DATAPAG2opc', td_BMobs_2OPC = '$OBS2opc',


td_BMn3OPC = '$NBM3opc', td_BMnproc3OPC = '$PROCADM3opc', td_BMempenho3OPC = '$NE3opc', td_BMnotafiscal3OPC = '$NF3opc', td_BMperiodo3OPC = '$PERIDO3opc', 
td_BMperiodo33OPC = '$PERIODO33opc', td_CTTAvalor3OPC = '$VALOR3opc', td_BMdatapag3OPC = '$DATAPAG3opc', td_BMobs_3OPC = $OBS3opc',

td_BMn4OPC = '$NBM4opc', td_BMnproc4OPC = '$PROCADM4opc', td_BMempenho4OPC = '$NE4opc', td_BMnotafiscal4OPC = '$NF4opc', td_BMperiodo4OPC = '$PERIDO4opc', 
td_BMperiodo44OPC = '$PERIODO44opc', td_CTTAvalor4OPC = '$VALOR4opc', td_BMdatapag4OPC = '$DATAPAG4opc', td_BMobs_4OPC = '$OBS4opc'',


td_BMn5OPC = '$NBM5opc', td_BMnproc5OPC = '$PROCADM5opc', td_BMempenho5OPC = '$NE5opc', td_BMnotafiscal5OPC = '$NF5opc', td_BMperiodo5OPC = '$PERIDO5opc', 
td_BMperiodo55OPC = '$PERIODO55opc', td_CTTAvalor5OPC = '$VALOR5opc', td_BMdatapag5OPC = '$DATAPAG5opc', td_BMobs_5OPC = '$OBS5opc' ,

td_BMn6OPC = '$NBM6opc', td_BMnproc6OPC = '$PROCADM6opc', td_BMempenho6OPC = '$NE6opc', td_BMnotafiscal6OPC = '$NF6opc', td_BMperiodo6OPC = '$PERIDO6opc', 
td_BMperiodo66OPC = '$PERIODO66opc', td_CTTAvalor6OPC = '$VALOR6opc', td_BMdatapag6OPC = '$DATAPAG6opc', td_BMobs_6OPC = '$OBS6opc',


td_BMn7OPC = '$NBM7opc', td_BMnproc7OPC = '$PROCADM7opc', td_BMempenho7OPC = '$NE7opc', td_BMnotafiscal7OPC = '$NF7opc', td_BMperiodo7OPC = '$PERIDO7opc', 
td_BMperiodo77OPC = '$PERIODO77opc', td_CTTAvalor7OPC = '$VALOR7opc', td_BMdatapag7OPC = '$DATAPAG7opc', td_BMobs_7OPC = '$OBS7opc', 

td_BMn8OPC = '$NBM8opc', td_BMnproc8OPC = '$PROCADM8opc', td_BMempenho8OPC = '$NE8opc', td_BMnotafiscal8OPC = '$NF8opc', td_BMperiodo8OPC = '$PERIDO8opc', 
td_BMperiodo88OPC = '$PERIODO88opc', td_CTTAvalor8OPC = '$VALOR8opc', td_BMdatapag8OPC = '$DATAPAG8opc', td_BMobs_8OPC = '$OBS8opc',

td_BMn9OPC = '$NBM9opc', td_BMnproc9OPC = '$PROCADM9opc', td_BMempenho9OPC = '$NE9opc', td_BMnotafiscal9OPC = '$NF9opc', td_BMperiodo9OPC = '$PERIDO9opc', 
td_BMperiodo99OPC = '$PERIODO99opc', td_CTTAvalor9OPC = '$VALOR9opc', td_BMdatapag9OPC = '$DATAPAG9opc', td_BMobs_9OPC = '$OBS9opc',

td_BMn10OPC = '$NBM10opc', td_BMnproc10OPC = '$PROCADM10opc', td_BMempenho10OPC = '$NE10opc', td_BMnotafiscal10OPC = '$NF10opc', td_BMperiodo10OPC = '$PERIDO10opc' , 
td_BMperiodo1010OPC = '$PERIODO100opc', td_CTTAvalor10OPC = '$VALOR10opc', td_BMdatapag10OPC = '$DATAPAG10opc', td_BMobs_10OPC = '$OBS10opc',

td_BMn11OPC = '$NBM11opc', td_BMnproc11OPC = '$PROCADM11opc', td_BMempenho11OPC = '$NE11opc', td_BMnotafiscal11OPC = '$NF11opc', td_BMperiodo1111OPC = '$PERIDO11opc', 
td_BMperiodo111OPC = '$PERIODO111opc', td_CTTAvalor11OPC = '$VALOR11opc', td_BMdatapag11OPC = '$DATAPAG11opc', td_BMobs_11OPC = '$OBS11opc',

td_BMn12OPC = '$NBM12opc', td_BMnproc12OPC = '$PROCADM12opc', td_BMempenho12OPC = '$NE12opc', td_BMnotafiscal12OPC = '$NF12opc', td_BMperiodo12OPC = '$PERIDO12opc', 
td_BMperiodo1212OPC = '$PERIODO122opc', td_CTTAvalor12OPC = '$VALOR12opc', td_BMdatapag21OPC = '$DATAPAG12opc', td_BMobs_12OPC = '$OBS12opc',

td_BMn13OPC = '$NBM13opc', td_BMnproc13OPC ='$PROCADM13opc', td_BMempenho13OPC = '$NE13opc', td_BMnotafiscal13OPC = '$NF13opc', td_BMperiodo13OPC = '$PERIDO13opc', 
td_BMperiodo1313OPC = '$PERIODO133opc', td_CTTAvalor13OPC = '$VALOR13opc', td_BMdatapag13OPC = '$DATAPAG13opc', td_BMobs_13OPC = '$OBS13opc',

td_BMn14OPC = '$NBM14opc', td_BMnproc14OPC = '$PROCADM14opc', td_BMempenho14OPC = '$NE14opc', td_BMnotafiscal14OPC = '$NF14opc', td_BMperiodo14OPC = '$PERIDO14opc', 
td_BMperiodo1414OPC = '$PERIODO144opc', td_CTTAvalor14OPC = '$VALOR14opc', td_BMdatapag14OPC = '$DATAPAG14opc', td_BMobs_14OPC = '$OBS14opc',

td_BMn15OPC = '$NBM15opc', td_BMnproc15OPC = '$PROCADM15opc', td_BMempenho15OPC = '$NE15opc', td_BMnotafiscal15OPC = '$NF15opc', td_BMperiodo15OPC = '$PERIDO15opc', 
td_BMperiodo150OPC = '$PERIODO155opc', td_CTTAvalor15OPC = '$VALOR15opc', td_BMdatapag15OPC = '$DATAPAG15opc', td_BMobs_15OPC = '$OBS15opc',
 
td_ValorTotalContratoOPC = '$TOTALCTopc', td_ValorTotalBoletimOPC = '$TOTALBMopc', td_SaldoTotalContratualOPC = '$TOTALSALDOopc', td_vigenciaContratualOPC = '$VIGENCIAopc' 

WHERE id= '$id' ";

if (mysqli_query($conexao, $sql)){

echo "<script>alert('Cadastro Salvo com Sucesso!');window.location = 'operacao.php?id=$id';
</script>";

    //header("location: editarOperacaoCredito.php?id=$id ");
}else{
    echo "erro em ". $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);


?>
