<?php include_once"conexao.php"; ?>

<?php
$PROCLICITATORIO = $_POST['td_CTproceLic'];
$PROCADM = $_POST['td_CTprocadm'];
$nome = $_POST['nome'];
$NCONTRATO = $_POST['td_CTncontrato'];
$VALORCTRP = $_POST['td_CTvalorRP'];
$ORDEMSERV = $_POST['td_CTordemsevRP'];
$VIGENCIAINICIAL = $_POST['td_CTvigenciaRP'];

$OBJETO = $_POST['td_CTobjeto'];

$NTERMOADT1 = $_POST['td_CTTAnumeroRP1'];
$PROCTA1 = $_POST['td_CTTAprocadmRP1'];
$PRAZOTA1 = $_POST['td_CTTAprazoRP1'];
$VALORTA1 = $_POST['td_CTTAvalorRP1'];
$PARALISACAOTA1 = $_POST['td_CTTAparalisacaoRP1'];
$OBSTA1 = $_POST['td_CTTAobsRP1'];

$NTERMOADT2 = $_POST['td_CTTAnumeroRP2'];
$PROCTA2 = $_POST['td_CTTAprocadmRP2'];
$PRAZOTA2 = $_POST['td_CTTAprazoRP2'];
$VALORTA2 = $_POST['td_CTTAvalorRP2'];
$PARALISACAOTA2 = $_POST['td_CTTAparalisacaoRP2'];
$OBSTA2 = $_POST['td_CTTAobsRP2'];

$NTERMOADT3 = $_POST['td_CTTAnumeroRP3'];
$PROCTA3 = $_POST['td_CTTAprocadmRP3'];
$PRAZOTA3 = $_POST['td_CTTAprazoRP3'];
$VALORTA3 = $_POST['td_CTTAvalorRP3'];
$PARALISACAOTA3 = $_POST['td_CTTAparalisacaoRP3'];
$OBSTA3 = $_POST['td_CTTAobsRP3'];

$NTERMOADT4 = $_POST['td_CTTAnumeroRP4'];
$PROCTA4 = $_POST['td_CTTAprocadmRP4'];
$PRAZOTA4 = $_POST['td_CTTAprazoRP4'];
$VALORTA4 = $_POST['td_CTTAvalorRP4'];
$PARALISACAOTA4 = $_POST['td_CTTAparalisacaoRP4'];
$OBSTA4 = $_POST['td_CTTAobsRP4'];

$NTERMOADT5 = $_POST['td_CTTAnumeroRP5'];
$PROCTA5 = $_POST['td_CTTAprocadmRP5'];
$PRAZOTA5 = $_POST['td_CTTAprazoRP5'];
$VALORTA5 = $_POST['td_CTTAvalorRP5'];
$PARALISACAOTA5 = $_POST['td_CTTAparalisacaoRP5'];
$OBSTA5 = $_POST['td_CTTAobsRP5'];


 

$NBM1 = $_POST['td_BMn1RP'];
$PROCADM1 = $_POST['td_BMnproc1RP'];
$NE1 = $_POST['td_BMempenho1RP'];
$NF1 = $_POST['td_BMnotafiscal1RP'];
$PERIDO1 = $_POST['td_BMperiodo11RP'];
$PERIODO11 = $_POST['td_BMperiodo13RP'];
$VALOR1 = $_POST['quantRP1'];
$DATAPAG1 = $_POST['td_BMdatapag1RP'];
$OBS1 = $_POST['td_BMobs_1RP'];

$NBM2 = $_POST['td_BMn2RP'];
$PROCADM2 = $_POST['td_BMnproc2RP'];
$NE2 = $_POST['td_BMempenho2RP'];
$NF2 = $_POST['td_BMnotafiscal2RP'];
$PERIDO2 = $_POST['td_BMperiodo21RP'];
$PERIODO22 = $_POST['td_BMperiodo23RP'];
$VALOR2 = $_POST['quantRP2'];
$DATAPAG2 = $_POST['td_BMdatapag2RP'];
$OBS2 = $_POST['td_BMobs_2RP'];

$NBM3 = $_POST['td_BMn3RP'];
$PROCADM3 = $_POST['td_BMnproc3RP'];
$NE3 = $_POST['td_BMempenho3RP'];
$NF3 = $_POST['td_BMnotafiscal3RP'];
$PERIDO3 = $_POST['td_BMperiodo31RP'];
$PERIODO33 = $_POST['td_BMperiodo33RP'];
$VALOR3 = $_POST['quantRP3'];
$DATAPAG3 = $_POST['td_BMdatapag3RP'];
$OBS3 = $_POST['td_BMobs_3RP'];

$NBM4 = $_POST['td_BMn4RP'];
$PROCADM4 = $_POST['td_BMnproc4RP'];
$NE4 = $_POST['td_BMempenho4RP'];
$NF4 = $_POST['td_BMnotafiscal4RP'];
$PERIDO4 = $_POST['td_BMperiodo41RP'];
$PERIODO44 = $_POST['td_BMperiodo43RP'];
$VALOR4 = $_POST['quantRP4'];
$DATAPAG4 = $_POST['td_BMdatapag4RP'];
$OBS4 = $_POST['td_BMobs_4RP'];

$NBM5 = $_POST['td_BMn5RP'];
$PROCADM5 = $_POST['td_BMnproc5RP'];
$NE5 = $_POST['td_BMempenho5RP'];
$NF5 = $_POST['td_BMnotafiscal5RP'];
$PERIDO5 = $_POST['td_BMperiodo51RP'];
$PERIODO55 = $_POST['td_BMperiodo53RP'];
$VALOR5 = $_POST['quantRP5'];
$DATAPAG5 = $_POST['td_BMdatapag5RP'];
$OBS5 = $_POST['td_BMobs_5RP'];

$NBM6 = $_POST['td_BMn6RP'];
$PROCADM6 = $_POST['td_BMnproc6RP'];
$NE6 = $_POST['td_BMempenho6RP'];
$NF6 = $_POST['td_BMnotafiscal6RP'];
$PERIDO6 = $_POST['td_BMperiodo61RP'];
$PERIODO66 = $_POST['td_BMperiodo63RP'];
$VALOR6 = $_POST['quantRP6'];
$DATAPAG6 = $_POST['td_BMdatapag6RP'];
$OBS6 = $_POST['td_BMobs_6RP'];

$NBM7 = $_POST['td_BMn7RP'];
$PROCADM7 = $_POST['td_BMnproc7RP'];
$NE7 = $_POST['td_BMempenho7RP'];
$NF7 = $_POST['td_BMnotafiscal7RP'];
$PERIDO7 = $_POST['td_BMperiodo71RP'];
$PERIODO77 = $_POST['td_BMperiodo73RP'];
$VALOR7 = $_POST['quantRP7'];
$DATAPAG7 = $_POST['td_BMdatapag7RP'];
$OBS7 = $_POST['td_BMobs_7RP'];

$NBM8 = $_POST['td_BMn8RP'];
$PROCADM8 = $_POST['td_BMnproc8RP'];
$NE8 = $_POST['td_BMempenho8RP'];
$NF8 = $_POST['td_BMnotafiscal8RP'];
$PERIDO8 = $_POST['td_BMperiodo81RP'];
$PERIODO88 = $_POST['td_BMperiodo83RP'];
$VALOR8 = $_POST['quantRP8'];
$DATAPAG8= $_POST['td_BMdatapag8RP'];
$OBS8 = $_POST['td_BMobs_8RP'];

$NBM9 = $_POST['td_BMn9RP'];
$PROCADM9 = $_POST['td_BMnproc9RP'];
$NE9 = $_POST['td_BMempenho9RP'];
$NF9 = $_POST['td_BMnotafiscal9RP'];
$PERIDO9 = $_POST['td_BMperiodo91RP'];
$PERIODO99 = $_POST['td_BMperiodo93RP'];
$VALOR9 = $_POST['quantRP9'];
$DATAPAG9 = $_POST['td_BMdatapag9RP'];
$OBS9 = $_POST['td_BMobs_9RP'];

$NBM10 = $_POST['td_BMn10RP'];
$PROCADM10 = $_POST['td_BMnproc10RP'];
$NE10 = $_POST['td_BMempenho10RP'];
$NF10 = $_POST['td_BMnotafiscal10RP'];
$PERIDO10 = $_POST['td_BMperiodo101RP'];
$PERIODO100 = $_POST['td_BMperiodo103RP'];
$VALOR10 = $_POST['quantRP10'];
$DATAPAG10 = $_POST['td_BMdatapag10RP'];
$OBS10 = $_POST['td_BMobs_10RP'];


$TOTALCTRP = $_POST['td_ValorTotalContratoRP'];
$TOTALBMRP = $_POST['td_ValorTotalBoletimRP'];
$TOTALSALDORP = $_POST['td_SaldoTotalContratualRP'];
$VIGENCIARP = $_POST['td_VigenciaContratualRP'];


$sql = "INSERT INTO recursoproprio (td_CTproceLic, td_CTprocadm, nome, td_CTncontrato, td_CTvalorRP, td_CTordemsevRP,td_CTvigenciaRP, 
td_CTobjeto, td_CTTAnumeroRP1, td_CTTAprocadmRP1, td_CTTAprazoRP1,td_CTTAvalorRP1, td_CTTAparalisacaoRP1, td_CTTAobsRP1, td_CTTAnumeroRP2, 
td_CTTAprocadmRP2,td_CTTAprazoRP2, td_CTTAvalorRP2,td_CTTAparalisacaoRP2, td_CTTAobsRP2, td_CTTAnumeroRP3,td_CTTAprocadmRP3,td_CTTAprazoRP3, td_CTTAvalorRP3, 
td_CTTAparalisacaoRP3, td_CTTAobsRP3, td_CTTAnumeroRP4,td_CTTAprocadmRP4, td_CTTAprazoRP4, td_CTTAvalorRP4, td_CTTAparalisacaoRP4, 
td_CTTAobsRP4, td_CTTAnumeroRP5, td_CTTAprocadmRP5, td_CTTAprazoRP5, td_CTTAvalorRP5,td_CTTAparalisacaoRP5, td_CTTAobsRP5, td_BMn1RP, 
td_BMnproc1RP, td_BMempenho1RP,td_BMnotafiscal1RP, td_BMperiodo11RP, td_BMperiodo13RP, quantRP1, td_BMdatapag1RP,td_BMobs_1RP, td_BMn2RP, 
td_BMnproc2RP, td_BMempenho2RP, td_BMnotafiscal2RP, td_BMperiodo21RP, td_BMperiodo23RP, quantRP2, td_BMdatapag2RP, td_BMobs_2RP,
td_BMn3RP, td_BMnproc3RP, td_BMempenho3RP, td_BMnotafiscal3RP, td_BMperiodo31RP,td_BMperiodo33RP, quantRP3, td_BMdatapag3RP, td_BMobs_3RP, 
td_BMn4RP, td_BMnproc4RP,td_BMempenho4RP, td_BMnotafiscal4RP, td_BMperiodo41RP, td_BMperiodo43RP, quantRP4,td_BMdatapag4RP, td_BMobs_4RP, 
td_BMn5RP, td_BMnproc5RP, td_BMempenho5RP, td_BMnotafiscal5RP,td_BMperiodo51RP, td_BMperiodo53RP, quantRP5, td_BMdatapag5RP, td_BMobs_5RP,
td_BMn6RP, td_BMnproc6RP, td_BMempenho6RP, td_BMnotafiscal6RP, td_BMperiodo61RP, td_BMperiodo63RP, quantRP6, td_BMdatapag6RP, td_BMobs_6RP, 
td_BMn7RP, td_BMnproc7RP, td_BMempenho7RP, td_BMnotafiscal7RP, td_BMperiodo71RP, td_BMperiodo73RP, quantRP7,td_BMdatapag7RP, td_BMobs_7RP, 
td_BMn8RP, td_BMnproc8RP, td_BMempenho8RP, td_BMnotafiscal8RP,td_BMperiodo81RP, td_BMperiodo83RP, quantRP8, td_BMdatapag8RP, td_BMobs_8RP,
td_BMn9RP, td_BMnproc9RP, td_BMempenho9RP, td_BMnotafiscal9RP, td_BMperiodo91RP,td_BMperiodo93RP, quantRP9, td_BMdatapag9RP, td_BMobs_9RP, 
td_BMn10RP, td_BMnproc10RP,td_BMempenho10RP, td_BMnotafiscal10RP, td_BMperiodo101RP, td_BMperiodo103RP, quantRP10,td_BMdatapag10RP, td_BMobs_10RP, 
td_ValorTotalContratoRP, td_ValorTotalBoletimRP, td_SaldoTotalContratualRP, td_VigenciaContratualRP) VALUES ('$PROCLICITATORIO','$PROCADM','$nome','$NCONTRATO', '$VALORCTRP',
'$ORDEMSERV','$VIGENCIAINICIAL','$OBJETO','$NTERMOADT1','$PROCTA1','$PRAZOTA1','$VALORTA1','$PARALISACAOTA1','$OBSTA1',
'$NTERMOADT2','$PROCTA2','$PRAZOTA2','$VALORTA2','$PARALISACAOTA2','$OBSTA2','$NTERMOADT3','$PROCTA3','$PRAZOTA3','$VALORTA3','$PARALISACAOTA3',
'$OBSTA3','$NTERMOADT4','$PROCTA4','$PRAZOTA4','$VALORTA4','$PARALISACAOTA4','$OBSTA4','$NTERMOADT5','$PROCTA5','$PRAZOTA5',
'$VALORTA5','$PARALISACAOTA5','$OBSTA5','$NBM1','$NBM1','$PROCADM1','$NE1','$NF1','$PERIDO1','$PERIODO11','$VALOR1','$DATAPAG1','$OBS1',
'$NBM2','$PROCADM2','$NE2','$NF2','$PERIDO2','$PERIODO22','$VALOR2','$DATAPAG2','$OBS2','$NBM3','$PROCADM3','$NE3','$NF3','$PERIDO3',
'$PERIODO33','$VALOR3','$DATAPAG3','$OBS3','$NBM4','$PROCADM4','$NE4','$NF4','$PERIDO4','$PERIODO44','$VALOR4','$DATAPAG4','$OBS4'
'$NBM5','$PROCADM5','$NE5','$NF5','$PERIDO5','$PERIODO55','$VALOR5','$DATAPAG5','$OBS5','$NBM6','$PROCADM6','$NE6','$NF6','$PERIDO6','$PERIODO66',
'$VALOR6','$DATAPAG6','$OBS6','$NBM7','$PROCADM7','$NE7','$NF7','$PERIDO7','$PERIODO77','$VALOR7','$DATAPAG7','$OBS7','$NBM8','$PROCADM8',
'$NE8','$NF8','$PERIDO8','$PERIODO88','$VALOR8','$DATAPAG8','$OBS8','$NBM9','$PROCADM9','$NE9','$NF9','$PERIDO9','$PERIODO99','$VALOR9',
'$DATAPAG9','$OBS9','$NBM10','$PROCADM10','$NE10','$NF10','$PERIDO10','$PERIODO100','$VALOR10','$DATAPAG10','$OBS10','$TOTALCTRP',
'$TOTALBMRP','$TOTALSALDORP', '$VIGENCIARP')";

if(mysqli_query($conexao, $sql)){
    header("location: recursoProprio.php");
}else{
    echo "erro". $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);


?>


