<?php include_once"conexao.php"; ?>


<?php

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


$sql = "INSERT INTO operacaodecredito (td_CTproceLic, td_CTprocadm, nome, td_CTncontrato, td_CTvalorOPC, td_CTordemsevOPC, td_CTvigenciaOPC, 
td_CTobjeto,
numeroOPC, 
td_CTTAnumeroOPC1, td_CTTAprocadmOPC1, td_CTTAprazoOPC1, td_CTTAvalorOPC1, td_CTTAparalisacaoOPC1, td_CTTAobsOPC1, 
td_CTTAnumeroOPC2, td_CTTAprocadmOPC2, td_CTTAprazoOPC2, td_CTTAvalorOPC2, td_CTTAparalisacaoOPC2, td_CTTAobsOPC2, 
td_CTTAnumeroOPC3, td_CTTAprocadmOPC3, td_CTTAprazoOPC3, td_CTTAvalorOPC3, td_CTTAparalisacaoOPC3, td_CTTAobsOPC3, 
td_CTTAnumeroOPC4, td_CTTAprocadmOPC4, td_CTTAprazoOPC4, td_CTTAvalorOPC4, td_CTTAparalisacaoOPC4, td_CTTAobsOPC4, 
td_CTTAnumeroOPC5, td_CTTAprocadmOPC5, td_CTTAprazoOPC5, td_CTTAvalorOPC5, td_CTTAparalisacaoOPC5, td_CTTAobsOPC5, 

td_BMn1OPC, td_BMnproc1OPC, td_BMempenho1OPC, td_BMnotafiscal1OPC, td_BMperiodo1OPC, td_BMperiodo11OPC, td_CTTAvalor1OPC, td_BMdatapag1OPC, td_BMobs_1OPC, 
td_BMn2OPC, td_BMnproc2OPC, td_BMempenho2OPC, td_BMnotafiscal2OPC, td_BMperiodo2OPC, td_BMperiodo22OPC, td_CTTAvalor2OPC, td_BMdatapag2OPC, td_BMobs_2OPC,
td_BMn3OPC, td_BMnproc3OPC, td_BMempenho3OPC, td_BMnotafiscal3OPC, td_BMperiodo3OPC, td_BMperiodo33OPC, td_CTTAvalor3OPC, td_BMdatapag3OPC, td_BMobs_3OPC, 
td_BMn4OPC, td_BMnproc4OPC, td_BMempenho4OPC, td_BMnotafiscal4OPC, td_BMperiodo4OPC, td_BMperiodo44OPC, td_CTTAvalor4OPC, td_BMdatapag4OPC, td_BMobs_4OPC,
td_BMn5OPC, td_BMnproc5OPC, td_BMempenho5OPC, td_BMnotafiscal5OPC, td_BMperiodo5OPC, td_BMperiodo55OPC, td_CTTAvalor5OPC, td_BMdatapag5OPC, td_BMobs_5OPC,
td_BMn6OPC, td_BMnproc6OPC, td_BMempenho6OPC, td_BMnotafiscal6OPC, td_BMperiodo6OPC, td_BMperiodo66OPC, td_CTTAvalor6OPC, td_BMdatapag6OPC, td_BMobs_6OPC, 
td_BMn7OPC, td_BMnproc7OPC, td_BMempenho7OPC, td_BMnotafiscal7OPC, td_BMperiodo7OPC, td_BMperiodo77OPC, td_CTTAvalor7OPC, td_BMdatapag7OPC, td_BMobs_7OPC, 
td_BMn8OPC, td_BMnproc8OPC, td_BMempenho8OPC, td_BMnotafiscal8OPC, td_BMperiodo8OPC, td_BMperiodo88OPC, td_CTTAvalor8OPC, td_BMdatapag8OPC, td_BMobs_8OPC,
td_BMn9OPC, td_BMnproc9OPC, td_BMempenho9OPC, td_BMnotafiscal9OPC, td_BMperiodo9OPC, td_BMperiodo99OPC, td_CTTAvalor9OPC, td_BMdatapag9OPC, td_BMobs_9OPC, 
td_BMn10OPC, td_BMnproc10OPC, td_BMempenho10OPC, td_BMnotafiscal10OPC, td_BMperiodo10OPC, td_BMperiodo1010OPC, td_CTTAvalor10OPC, td_BMdatapag10OPC, td_BMobs_10OPC, 
td_BMn11OPC, td_BMnproc11OPC, td_BMempenho11OPC, td_BMnotafiscal11OPC, td_BMperiodo1111OPC, td_BMperiodo111OPC, td_CTTAvalor11OPC, td_BMdatapag11OPC, td_BMobs_11OPC, 
td_BMn12OPC, td_BMnproc12OPC, td_BMempenho12OPC, td_BMnotafiscal12OPC, td_BMperiodo12OPC, td_BMperiodo1212OPC, td_CTTAvalor12OPC, td_BMdatapag21OPC, td_BMobs_12OPC,
td_BMn13OPC, td_BMnproc13OPC, td_BMempenho13OPC, td_BMnotafiscal13OPC, td_BMperiodo13OPC, td_BMperiodo1313OPC, td_CTTAvalor13OPC, td_BMdatapag13OPC, td_BMobs_13OPC, 
td_BMn14OPC, td_BMnproc14OPC, td_BMempenho14OPC, td_BMnotafiscal14OPC, td_BMperiodo14OPC, td_BMperiodo1414OPC, td_CTTAvalor14OPC, td_BMdatapag14OPC, td_BMobs_14OPC,
td_BMn15OPC, td_BMnproc15OPC, td_BMempenho15OPC, td_BMnotafiscal15OPC, td_BMperiodo15OPC, td_BMperiodo150OPC, td_CTTAvalor15OPC, td_BMdatapag15OPC, td_BMobs_15OPC,

td_ValorTotalContratoOPC, td_ValorTotalBoletimOPC, td_SaldoTotalContratualOPC, td_vigenciaContratualOPC) 
VALUES ('$PROCLICITATORIOopc','$PROCADMopc','$nome','$NCONTRATOopc', '$VALORCTopc','$ORDEMSERVopc','$VIGENCIAINICIALopc',
'$OBJETOopc',
'$Nopc',
'$NTERMOADT1opc','$PROCTA1opc','$PRAZOTA1opc','$VALORTA1opc','$PARALISACAOTA1opc','$OBSTA1opc',
'$NTERMOADT2opc','$PROCTA2opc','$PRAZOTA2opc','$VALORTA2opc','$PARALISACAOTA2opc','$OBSTA2opc',
'$NTERMOADT3opc','$PROCTA3opc','$PRAZOTA3opc','$VALORTA3opc','$PARALISACAOTA3opc','$OBSTA3opc',
'$NTERMOADT4opc','$PROCTA4opc','$PRAZOTA4opc','$VALORTA4opc','$PARALISACAOTA4opc','$OBSTA4opc',
'$NTERMOADT5opc','$PROCTA5opc','$PRAZOTA5opc','$VALORTA5opc','$PARALISACAOTA5opc','$OBSTA5opc',

'$NBM1opc','$PROCADM1opc','$NE1opc','$NF1opc','$PERIDO1opc','$PERIODO11opc','$VALOR1opc','$DATAPAG1opc','$OBS1opc',
'$NBM2opc','$PROCADM2opc','$NE2opc','$NF2opc','$PERIDO2opc','$PERIODO22opc','$VALOR2opc','$DATAPAG2opc','$OBS2opc',
'$NBM3opc','$PROCADM3opc','$NE3opc','$NF3opc','$PERIDO3opc','$PERIODO33opc','$VALOR3opc','$DATAPAG3opc','$OBS3opc',
'$NBM4opc','$PROCADM4opc','$NE4opc','$NF4opc','$PERIDO4opc','$PERIODO44opc','$VALOR4opc','$DATAPAG4opc','$OBS4opc',
'$NBM5opc','$PROCADM5opc','$NE5opc','$NF5opc','$PERIDO5opc','$PERIODO55opc','$VALOR5opc','$DATAPAG5opc','$OBS5opc',
'$NBM6opc','$PROCADM6opc','$NE6opc','$NF6opc','$PERIDO6opc','$PERIODO66opc','$VALOR6opc','$DATAPAG6opc','$OBS6opc',
'$NBM7opc','$PROCADM7opc','$NE7opc','$NF7opc','$PERIDO7opc','$PERIODO77opc','$VALOR7opc','$DATAPAG7opc','$OBS7opc',
'$NBM8opc','$PROCADM8opc','$NE8opc','$NF8opc','$PERIDO8opc','$PERIODO88opc','$VALOR8opc','$DATAPAG8opc','$OBS8opc',
'$NBM9opc','$PROCADM9opc','$NE9opc','$NF9opc','$PERIDO9opc','$PERIODO99opc','$VALOR9opc','$DATAPAG9opc','$OBS9opc',
'$NBM10opc','$PROCADM10opc','$NE10opc','$NF10opc','$PERIDO10opc','$PERIODO100opc','$VALOR10opc','$DATAPAG10opc','$OBS10opc',
'$NBM11opc','$PROCADM11opc','$NE11opc','$NF11opc','$PERIDO11opc','$PERIODO111opc','$VALOR11opc','$DATAPAG11opc','$OBS11opc',
'$NBM12opc','$PROCADM12opc','$NE12opc','$NF12opc','$PERIDO12opc','$PERIODO122opc','$VALOR12opc','$DATAPAG12opc','$OBS12opc',
'$NBM13opc','$PROCADM13opc','$NE13opc','$NF13opc','$PERIDO13opc','$PERIODO133opc','$VALOR13opc','$DATAPAG13opc','$OBS13opc',
'$NBM14opc','$PROCADM14opc','$NE14opc','$NF14opc','$PERIDO14opc','$PERIODO144opc','$VALOR14opc','$DATAPAG14opc','$OBS14opc',
'$NBM15opc','$PROCADM15opc','$NE15opc','$NF15opc','$PERIDO15opc','$PERIODO155opc','$VALOR15opc','$DATAPAG15opc','$OBS15opc',

'$TOTALCTopc','$TOTALBMopc','$TOTALSALDOopc', '$VIGENCIAopc')";

if(mysqli_query($conexao, $sql)){
    header("location: operacao.php");
}else{
    echo "erro no processamento dos dados". $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);


?>