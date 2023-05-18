<?php include_once"conexao.php"; ?>

<?php

    $id = $_POST['id'];	

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


$sql = "UPDATE recursproprio SET td_CTproceLicRP='$PROCLICITATORIO', td_CTprocadmRP='$PROCADM', nome='$nome', td_CTncontratoRP='$NCONTRATO', 
td_CTvalorRP='$VALORCTRP', td_CTordemsevRP='$ORDEMSERV', 
td_CTvigenciaRP='$VIGENCIAINICIAL', td_CTobjetoRP='$OBJETO', td_CTTAnumeroRP1='$NTERMOADT1', td_CTTAprocadmRP1='$PROCTA1', td_CTTAprazoRP1='$PRAZOTA1',td_CTTAvalorRP1='$VALORTA1',
 td_CTTAparalisacaoRP1='$PARALISACAOTA1', td_CTTAobsRP1='$OBSTA1', td_CTTAnumeroRP2='$NTERMOADT2', td_CTTAprocadmRP2='$PROCTA2',td_CTTAprazoRP2='$PRAZOTA2', 
td_CTTAvalorRP2='$VALORTA2',td_CTTAparalisacaoRP2='$PARALISACAOTA2', td_CTTAobsRP2='$OBSTA2', td_CTTAnumeroRP3='$NTERMOADT3',td_CTTAprocadmRP3='$PROCTA3',
td_CTTAprazoRP3='$PRAZOTA3', td_CTTAvalorRP3='$VALORTA3', td_CTTAparalisacaoRP3='$PARALISACAOTA3', td_CTTAobsRP3='$OBSTA3', td_CTTAnumeroRP4='$NTERMOADT4',
td_CTTAprocadmRP4='$PROCTA4', td_CTTAprazoRP4='$PRAZOTA4', td_CTTAvalorRP4='$VALORTA4', td_CTTAparalisacaoRP4='$PARALISACAOTA4', td_CTTAobsRP4='$OBSTA4', 
td_CTTAnumeroRP5='$NTERMOADT5', td_CTTAprocadmRP5='$PROCTA5', td_CTTAprazoRP5='$PRAZOTA5', td_CTTAvalorRP5='$VALORTA5',td_CTTAparalisacaoRP5='$PARALISACAOTA5', 
td_CTTAobsRP5='$OBSTA5', td_BMn1RP='$NBM1', td_BMnproc1RP='$PROCADM1', td_BMempenho1RP='$NE1',td_BMnotafiscal1RP='$NF1', td_BMperiodo11RP='$PERIDO1', 
td_BMperiodo13RP='$PERIODO11', quantRP1='$VALOR1', td_BMdatapag1RP='$DATAPAG1',td_BMobs_1RP='$OBS1', td_BMn2RP='$NBM2', td_BMnproc2RP='$PROCADM2', 
td_BMempenho2RP='$NE2', td_BMnotafiscal2RP='$NF2', td_BMperiodo21RP='$PERIDO2', td_BMperiodo23RP='$PERIODO22', quantRP2='$VALOR2', td_BMdatapag2RP='$DATAPAG2', 
td_BMobs_2RP='$OBS2',td_BMn3RP='$NBM3', td_BMnproc3RP='$PROCADM3', td_BMempenho3RP='$NE3', td_BMnotafiscal3RP='$NF3', td_BMperiodo31RP='$PERIDO3',
td_BMperiodo33RP='$PERIODO33', quantRP3='$VALOR3', td_BMdatapag3RP='$DATAPAG3', td_BMobs_3RP='$OBS3', td_BMn4RP='$NBM4', td_BMnproc4RP='$PROCADM4',
td_BMempenho4RP='$NE4', td_BMnotafiscal4RP='$NF4', td_BMperiodo41RP='$PERIDO4', td_BMperiodo43RP='$PERIODO44', quantRP4='$VALOR4',td_BMdatapag4RP='$DATAPAG4', 
td_BMobs_4RP='$OBS4', td_BMn5RP='$NBM5', td_BMnproc5RP='$PROCADM5', td_BMempenho5RP='$NE5', td_BMnotafiscal5RP='$NF5',td_BMperiodo51RP='$PERIDO5', 
td_BMperiodo53RP='$PERIODO55', quantRP5='$VALOR5', td_BMdatapag5RP='$DATAPAG5', td_BMobs_5RP='$OBS5',td_BMn6RP='$NBM6', td_BMnproc6RP='$PROCADM6', 
td_BMempenho6RP='$NE6', td_BMnotafiscal6RP='$NF6', td_BMperiodo61RP='$PERIDO6', td_BMperiodo63RP='$PERIODO66', quantRP6='$VALOR6', td_BMdatapag6RP='$DATAPAG6', 
td_BMobs_6RP='$OBS6', td_BMn7RP='$NBM7', td_BMnproc7RP='$PROCADM7', td_BMempenho7RP='$NE7', td_BMnotafiscal7RP='$NF7', td_BMperiodo71RP='$PERIDO7', 
td_BMperiodo73RP='$PERIODO77', quantRP7='$VALOR7',td_BMdatapag7RP='$DATAPAG7', td_BMobs_7RP='$OBS7', td_BMn8RP='$NBM8', td_BMnproc8RP='$PROCADM8', 
td_BMempenho8RP='$NE8', td_BMnotafiscal8RP='$NF8',td_BMperiodo81RP='$PERIDO8', td_BMperiodo83RP='$PERIODO88', quantRP8='$VALOR8', td_BMdatapag8RP='$DATAPAG8', 
td_BMobs_8RP='$OBS8',td_BMn9RP='$NBM9', td_BMnproc9RP='$PROCADM9', td_BMempenho9RP='$NE9', td_BMnotafiscal9RP='$NF9', td_BMperiodo91RP='$PERIDO9',
td_BMperiodo93RP='$PERIODO99', quantRP9='$VALOR9', td_BMdatapag9RP='$DATAPAG9', td_BMobs_9RP='$OBS9', td_BMn10RP='$NBM10', td_BMnproc10RP='$PROCADM10',
td_BMempenho10RP='$NE10', td_BMnotafiscal10RP='$NF10', td_BMperiodo101RP='$PERIDO10', td_BMperiodo103RP='$PERIODO100', quantRP10='$VALOR10',
td_BMdatapag10RP='$DATAPAG10', td_BMobs_10RP='$OBS10', td_ValorTotalContratoRP='$TOTALCTRP', td_ValorTotalBoletimRP='$TOTALBMRP', 
td_SaldoTotalContratualRP='$TOTALSALDORP' WHERE id= '$id' ";

if (mysqli_query($conexao, $sql)){

echo "<script>alert('Cadastro Salvo com Sucesso!');window.location = 'recursoProprio.php?id=$id';
</script>";

    //header("location: editarRecursoProprio.php?id=$id ");
}else{
    echo "erro em ". $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);


?>




