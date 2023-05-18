<?php include_once"conexao.php"; ?>

<?php
echo $PROCLICITATORIOcv = $_POST['td_CTproceLic'];
$PROCADMcv = $_POST['td_CTprocadm'];
$nome = $_POST['nome'];
$NCONTRATOcv = $_POST['td_CTncontrato'];
$ORDEMSERVcv = $_POST['td_CTordemsevCV'];
$VIGENCIAINICIALcv = $_POST['td_CTvigenciaCV'];


$VALOREPASSEcv = $_POST['td_CTrepasseCV'];
$VALORCONTRAPcv = $_POST['td_CTcontrapartidaCV'];
$VALORCTcv = $_POST['td_CTvalorcontratualCV'];
$OBJETOcv = $_POST['td_CTobjeto'];

$NTA1cv = $_POST['td_CTTAnumeroCV1'];
$PROCTA1cv = $_POST['td_CTTAprocadmCV1'];
$PRAZOTA1cv = $_POST['td_CTTAprazoCV1'];
$VALORTA1cv = $_POST['td_CTTAvalorCV1'];
$PARALISACAOTA1cv = $_POST['td_CTTAparalisacaoCV1'];
$OBSTA1cv = $_POST['td_CTTAobsCV1'];

$NTA2cv = $_POST['td_CTTAnumeroCV2'];
$PROCTA2cv = $_POST['td_CTTAprocadmCV2'];
$PRAZOTA2cv = $_POST['td_CTTAprazoCV2'];
$VALORTA2cv = $_POST['td_CTTAvalorCV2'];
$PARALISACAOTA2cv = $_POST['td_CTTAparalisacaoCV2'];
$OBSTA2cv = $_POST['td_CTTAobsCV2'];

$NTA3cv = $_POST['td_CTTAnumeroCV3'];
$PROCTA3cv = $_POST['td_CTTAprocadmCV3'];
$PRAZOTA3cv = $_POST['td_CTTAprazoCV3'];
$VALORTA3cv = $_POST['td_CTTAvalorCV3'];
$PARALISACAOTA3cv = $_POST['td_CTTAparalisacaoCV3'];
$OBSTA3cv = $_POST['td_CTTAobsCV3'];


$ORGAOCONCEDcv = $_POST['td_CVorgconcCV'];
$NCVcv = $_POST['td_CVnconvCV'];
$VIGENCIACVicv = $_POST['td_CVvigencia1CV'];
$VIGENCIACViicv = $_POST['td_CVvigencia2CV'];
$SALDORPcv = $_POST['td_CVsaldoRPCV'];
$SALDOCPcv = $_POST['td_CVsaldoCPCV'];
$SALDOCVcv = $_POST['td_CVsaldoconvCV'];


$NRECEITA1cv = $_POST['td_CVnumeroreceita1CV'];
$VALORRPRECEITA1cv = $_POST['td_CVvalorRPreceita1CV'];
$VALORCPRECEITA1cv = $_POST['td_CVvalorCPreceita1CV'];
$DATARECEITA1cv = $_POST['td_CVdatareceitaCV1'];

$NRECEITA4cv = $_POST['td_CVnumeroreceita4CV'];
$VALORRPRECEITA4cv = $_POST['td_CVvalorRPreceita4CV'];
$VALORCPRECEITA4cv = $_POST['td_CVvalorCPreceita4CV'];
$DATARECEITA4cv  = $_POST['td_CVdatareceita4CV'];

$NRECEITA2cv = $_POST['td_CVnumeroreceita2CV'];
$VALORRPRECEITA2cv = $_POST['td_CVvalorRPreceita2CV'];
$VALORCPRECEITA2cv = $_POST['td_CVvalorCPreceita2CV'];
$DATARECEITA2cv = $_POST['td_CVdatareceita2CV'];

$NRECEITA5cv = $_POST['td_CVnumeroreceit5aCV'];
$VALORRPRECEITA5cv = $_POST['td_CVvalorRPreceita5CV'];
$VALORCPRECEITA5cv = $_POST['td_CVvalorCPreceita5CV'];
$DATARECEITA5cv= $_POST['td_CVdatareceita5CV'];

$NRECEITA3cv = $_POST['td_CVnumeroreceita3CV'];
$VALORRPRECEITA3cv = $_POST['td_CVvalorRPreceita3CV'];
$VALORCPRECEITA3cv = $_POST['td_CVvalorCPreceita3CV'];
$DATARECEITA3cv= $_POST['td_CVdatareceita3CV'];

$NRECEITA6cv = $_POST['td_CVnumeroreceita6CV'];
$VALORRPRECEITA6cv = $_POST['td_CVvalorRPreceita6CV'];
$VALORCPRECEITA6cv = $_POST['td_CVvalorCPreceita6CV'];
$dATARECEITA6cv = $_POST['td_CVdatareceita6CV'];

$NTA4cv = $_POST['td_CVTAnumero1CV'];
$PRAZOTA4cv = $_POST['td_CVTAprazoRP1'];
$VALORTA4cv = $_POST['td_CVTAvalor1CV'];
$PARALISACAOTA4cv = $_POST['td_CVTAparalisacao1CV'];
$OBSTA4cv = $_POST['td_CVTAobs1CV'];

$NTA5cv = $_POST['td_CVTAnumero2CV'];
$PRAZOTA5cv = $_POST['td_CVTAprazo2CV'];
$VALORTA5cv = $_POST['td_CVTAvalor2CV'];
$PARALISACAOTA5cv = $_POST['td_CVTAparalisacao2CV'];
$OBSTA5cv = $_POST['td_CVTAobs2CV'];

$NTA6cv = $_POST['td_CVTAnumero3CV'];
$PRAZOTA6cv = $_POST['td_CVTAprazo3CV'];
$VALORTA6cv = $_POST['td_CVTAvalor3CV'];
$PARALISACAOTA6cv = $_POST['td_CVTAparalisacao3CV'];
$OBSTA6cv = $_POST['td_CVTAobs3CV'];


$NBM1cv = $_POST['td_BMn1CV'];
$PROCADM1cv = $_POST['td_BMnproc1CV'];
$RP1cv = $_POST['td_BMrepasse1CV'];
$CP1cv = $_POST['td_BMcontrapartida1CV'];
$NE1cv = $_POST['td_BMempenho1CV'];
$NF1cv = $_POST['td_BMnotafiscal1CV'];
$PERIDO1cv = $_POST['td_BMperiodo1CV'];
$PERIODO11cv = $_POST['td_BMperiodo11CV'];
$VALOR1cv = $_POST['quant1CV'];
$DATAPAG1cv = $_POST['td_BMdatapag1CV'];
$OBS1cv = $_POST['td_BMobs_1CV'];

$NBM2cv = $_POST['td_BMn2CV'];
$PROCADM2cv = $_POST['td_BMnproc2CV'];
$RP2cv = $_POST['td_BMrepasse2CV'];
$CP2cv = $_POST['td_BMcontrapartida2CV'];
$NE2cv = $_POST['td_BMempenho2CV'];
$NF2cv = $_POST['td_BMnotafiscal2CV'];
$PERIDO2cv = $_POST['td_BMperiodo2CV'];
$PERIODO22cv = $_POST['td_BMperiodo22CV'];
$VALOR2cv = $_POST['quant2CV'];
$DATAPAG2cv = $_POST['td_BMdatapag2CV'];
$OBS2cv = $_POST['td_BMobs_2CV'];

$NBM3cv = $_POST['td_BMn3CV'];
$PROCADM3cv = $_POST['td_BMnproc3CV'];
$RP3cv = $_POST['td_BMrepasse3CV'];
$CP3cv = $_POST['td_BMcontrapartida3CV'];
$NE3cv = $_POST['td_BMempenho3CV'];
$NF3cv = $_POST['td_BMnotafiscal3CV'];
$PERIDO3cv = $_POST['td_BMperiodo3CV'];
$PERIODO33cv = $_POST['td_BMperiodo33CV'];
$VALOR3cv = $_POST['quant3CV'];
$DATAPAG3cv = $_POST['td_BMdatapag3CV'];
$OBS3cv = $_POST['td_BMobs_3CV'];

$NBM4cv = $_POST['td_BMn4CV'];
$PROCADM4cv = $_POST['td_BMnproc4CV'];
$RP4cv = $_POST['td_BMrepasse4CV'];
$CP4cv = $_POST['td_BMcontrapartida4CV'];
$NE4cv = $_POST['td_BMempenho4CV']; 
$NF4cv = $_POST['td_BMnotafiscal4CV'];
$PERIDO4cv = $_POST['td_BMperiodo4CV'];
$PERIODO44cv = $_POST['td_BMperiodo44CV'];
$VALOR4cv = $_POST['quant4CV'];
$DATAPAG4cv = $_POST['td_BMdatapag4CV'];
$OBS4cv = $_POST['td_BMobs_4CV'];

$NBM5cv = $_POST['td_BMn5CV'];
$PROCADM5cv = $_POST['td_BMnproc5CV'];
$RP5cv = $_POST['td_BMrepasse5CV'];
$CP5cv = $_POST['td_BMcontrapartida5CV'];
$NE5cv = $_POST['td_BMempenho5CV'];
$NF5cv = $_POST['td_BMnotafiscal5CV'];
$PERIDO5cv = $_POST['td_BMperiodo5CV'];
$PERIODO55cv = $_POST['td_BMperiodo55CV'];
$VALOR5cv = $_POST['quant5CV'];
$DATAPAG5cv = $_POST['td_BMdatapag5CV'];
$OBS5cv = $_POST['td_BMobs_5CV'];

$NBM6cv = $_POST['td_BMn6CV'];
$PROCADM6cv = $_POST['td_BMnproc6CV'];
$RP6cv = $_POST['td_BMrepasse6CV'];
$CP6cv = $_POST['td_BMcontrapartida6CV'];
$NE6cv = $_POST['td_BMempenho6CV'];
$NF6cv = $_POST['td_BMnotafiscal6CV'];
$PERIDO6cv = $_POST['td_BMperiodo6CV'];
$PERIODO66cv = $_POST['td_BMperiodo66CV'];
$VALOR6cv = $_POST['quant6CV'];
$DATAPAG6cv = $_POST['td_BMdatapag6CV'];
$OBS6cv = $_POST['td_BMobs_6CV'];

$NBM7cv = $_POST['td_BMn7CV'];
$PROCADM7cv = $_POST['td_BMnproc7CV'];
$RP7cv = $_POST['td_BMrepasse7CV'];
$CP7cv = $_POST['td_BMcontrapartida7CV'];
$NE7cv = $_POST['td_BMempenho7CV'];
$NF7cv = $_POST['td_BMnotafiscal7CV'];
$PERIDO7cv = $_POST['td_BMperiodo7CV'];
$PERIODO77cv = $_POST['td_BMperiodo77CV'];
$VALOR7cv = $_POST['quant7CV'];
$DATAPAG7cv = $_POST['td_BMdatapag7CV'];
$OBS7cv = $_POST['td_BMobs_7CV'];

$NBM8cv = $_POST['td_BMn8CV'];
$PROCADM8cv = $_POST['td_BMnproc8CV'];
$RP8cv = $_POST['td_BMrepasse8CV'];
$CP8cv = $_POST['td_BMcontrapartida8CV'];
$NE8cv = $_POST['td_BMempenho8CV'];
$NF8cv = $_POST['td_BMnotafiscal8CV'];
$PERIDO8cv = $_POST['td_BMperiodo8CV'];
$PERIODO88cv = $_POST['td_BMperiodo88CV'];
$VALOR8cv = $_POST['quant8CV'];
$DATAPAG8cv = $_POST['td_BMdatapag8CV'];
$OBS8cv = $_POST['td_BMobs_8CV'];

$NBM9cv = $_POST['td_BMn9CV'];
$PROCADM9cv = $_POST['td_BMnproc9CV'];
$RP9cv = $_POST['td_BMrepasse9CV'];
$CP9cv = $_POST['td_BMcontrapartida9CV'];
$NE9cv = $_POST['td_BMempenho9CV'];
$NF9cv = $_POST['td_BMnotafiscal9CV'];
$PERIDO9cv = $_POST['td_BMperiodo9CV'];
$PERIODO99cv = $_POST['td_BMperiodo99CV'];
$VALOR9cv = $_POST['quant9CV'];
$DATAPAG9cv = $_POST['td_BMdatapag9CV'];
$OBS9cv = $_POST['td_BMobs_9CV'];

$NBM10cv = $_POST['td_BMn10CV'];
$PROCADM10cv = $_POST['td_BMnproc10CV'];
$RP10cv = $_POST['td_BMrepasse10CV'];
$CP10cv = $_POST['td_BMcontrapartida10CV'];
$NE10cv = $_POST['td_BMempenho10CV'];
$NF10cv = $_POST['td_BMnotafiscal10CV'];
$PERIDO10cv = $_POST['td_BMperiodo10CV'];
$PERIODO1010cv = $_POST['td_BMperiodo1010CV'];
$VALOR10cv = $_POST['quant10CV'];
$DATAPAG10cv = $_POST['td_BMdatapag10CV'];
$OBS10cv = $_POST['td_BMobs_10CV'];

$NBM11cv = $_POST['td_BMn11CV'];
$PROCADM11cv = $_POST['td_BMnproc11CV'];
$RP11cv = $_POST['td_BMrepasse11CV'];
$CP11cv = $_POST['td_BMcontrapartida11CV'];
$NE11cv = $_POST['td_BMempenho11CV'];
$NF11cv = $_POST['td_BMnotafiscal11CV'];
$PERIDO11cv = $_POST['td_BMperiodo11RP'];
$PERIODO111cv = $_POST['td_BMperiodo111CV'];
$VALOR11cv = $_POST['quant11CV'];
$DATAPAG11cv = $_POST['td_BMdatapag11CV'];
$OBS11cv = $_POST['td_BMobs_11CV'];

$NBM12cv = $_POST['td_BMn12CV'];
$PROCADM12cv = $_POST['td_BMnproc12CV'];
$RP12cv = $_POST['td_BMrepasse12CV'];
$CP12cv = $_POST['td_BMcontrapartida12CV'];
$NE12cv = $_POST['td_BMempenho12CV'];
$NF12cv = $_POST['td_BMnotafiscal12CV'];
$PERIDO12cv = $_POST['td_BMperiodo12CV'];
$PERIODO1212cv = $_POST['td_BMperiodo1212CV'];
$VALOR12cv = $_POST['quant12CV'];
$DATAPAG12cv = $_POST['td_BMdatapag12CV'];
$OBS12cv = $_POST['td_BMobs_12CV'];

$NBM13cv = $_POST['td_BMn13CV'];
$PROCADM13cv = $_POST['td_BMnproc13CV'];
$RP13cv = $_POST['td_BMrepasse13CV'];
$CP13cv = $_POST['td_BMcontrapartida13CV'];
$NE13cv = $_POST['td_BMempenho13CV'];
$NF13cv = $_POST['td_BMnotafiscal13CV'];
$PERIDO13cv = $_POST['td_BMperiodo13CV'];
$PERIODO1313cv = $_POST['td_BMperiodo1313CV'];
$VALOR13cv = $_POST['quant13CV'];
$DATAPAG13cv = $_POST['td_BMdatapag13CV'];
$OBS13cv = $_POST['td_BMobs_13CV'];

$NBM14cv = $_POST['td_BMn14CV'];
$PROCADM14cv = $_POST['td_BMnproc14CV'];
$RP14cv = $_POST['td_BMrepasse14CV'];
$CP14cv = $_POST['td_BMcontrapartida14CV'];
$NE14cv = $_POST['td_BMempenho14CV'];
$NF14cv = $_POST['td_BMnotafiscal14CV'];
$PERIDO14cv = $_POST['td_BMperiodo14CV'];
$PERIODO1414cv = $_POST['td_BMperiodo1414CV'];
$VALOR14cv = $_POST['quant14CV'];
$DATAPAG14cv = $_POST['td_BMdatapag14CV'];
$OBS14cv = $_POST['td_BMobs_14CV'];

$NBM15cv = $_POST['td_BMn15CV'];
$PROCADM15cv = $_POST['td_BMnproc15CV'];
$RP15cv = $_POST['td_BMrepasse15CV'];
$CP15cv = $_POST['td_BMcontrapartida15CV'];
$NE15cv = $_POST['td_BMempenho15CV'];
$NF15cv = $_POST['td_BMnotafiscal15CV'];
$PERIDO15cv = $_POST['td_BMperiodo15CV'];
$PERIODO1515cv = $_POST['td_BMperiodo1515CV'];
$VALOR15cv = $_POST['quant15CV'];
$DATAPAG15cv = $_POST['td_BMdatapag15CV'];
$OBS15cv = $_POST['td_BMobs_15CV'];

$TOTALCTcv = $_POST['td_ValorTotalContratoCV'];
$TOTALBMcv = $_POST['td_ValorTotalBoletimCV'];
$TOTALSALDOcv = $_POST['td_SaldoTotalContratualCV'];
$VIGENCIAcv = $_POST['td_VigenciaContratualCV'];


$sql = "INSERT INTO convenio (td_CTproceLic, td_CTprocadm, nome, td_CTncontrato, td_CTordemsevCV, td_CTvigenciaCV,
td_CTrepasseCV, td_CTcontrapartidaCV, td_CTvalorcontratualCV, td_CTobjeto, 
td_CTTAnumeroCV1, td_CTTAprocadmCV1, td_CTTAprazoCV1, td_CTTAvalorCV1, td_CTTAparalisacaoCV1, td_CTTAobsCV1, 
td_CTTAnumeroCV2, td_CTTAprocadmCV2, td_CTTAprazoCV2, td_CTTAvalorCV2, td_CTTAparalisacaoCV2, td_CTTAobsCV2, 
td_CTTAnumeroCV3, td_CTTAprocadmCV3, td_CTTAprazoCV3, td_CTTAvalorCV3, td_CTTAparalisacaoCV3, td_CTTAobsCV3,

td_CVorgconcCV, td_CVnconvCV, td_CVvigencia1CV, td_CVvigencia2CV, td_CVsaldoRPCV, td_CVsaldoCPCV, td_CVsaldoconvCV,

td_CVnumeroreceita1CV, td_CVvalorRPreceita1CV, td_CVvalorCPreceita1CV, td_CVdatareceitaCV1,
td_CVnumeroreceita4CV, td_CVvalorRPreceita4CV, td_CVvalorCPreceita4CV, td_CVdatareceita4CV,
td_CVnumeroreceita2CV, td_CVvalorRPreceita2CV, td_CVvalorCPreceita2CV, td_CVdatareceita2CV,
td_CVnumeroreceit5aCV, td_CVvalorRPreceita5CV, td_CVvalorCPreceita5CV, td_CVdatareceita5CV,
td_CVnumeroreceita3CV, td_CVvalorRPreceita3CV, td_CVvalorCPreceita3CV, td_CVdatareceita3CV,
td_CVnumeroreceita6CV, td_CVvalorRPreceita6CV, td_CVvalorCPreceita6CV, td_CVdatareceita6CV,

td_CVTAnumero1CV, td_CVTAprazoRP1, td_CVTAvalor1CV, td_CVTAparalisacao1CV, td_CVTAobs1CV,
td_CVTAnumero2CV, td_CVTAprazo2CV, td_CVTAvalor2CV, td_CVTAparalisacao2CV, td_CVTAobs2CV,
td_CVTAnumero3CV, td_CVTAprazo3CV, td_CVTAvalor3CV, td_CVTAparalisacao3CV, td_CVTAobs3CV,

td_BMn1CV, td_BMnproc1CV, td_BMrepasse1CV, td_BMcontrapartida1CV, td_BMempenho1CV, td_BMnotafiscal1CV, td_BMperiodo1CV, td_BMperiodo11CV, quant1CV, td_BMdatapag1CV, td_BMobs_1CV,
td_BMn2CV, td_BMnproc2CV, td_BMrepasse2CV, td_BMcontrapartida2CV, td_BMempenho2CV, td_BMnotafiscal2CV, td_BMperiodo2CV, td_BMperiodo22CV, quant2CV, td_BMdatapag2CV, td_BMobs_2CV,
td_BMn3CV, td_BMnproc3CV, td_BMrepasse3CV, td_BMcontrapartida3CV, td_BMempenho3CV, td_BMnotafiscal3CV, td_BMperiodo3CV, td_BMperiodo33CV, quant3CV, td_BMdatapag3CV, td_BMobs_3CV,
td_BMn4CV, td_BMnproc4CV, td_BMrepasse4CV, td_BMcontrapartida4CV, td_BMempenho4CV, td_BMnotafiscal4CV, td_BMperiodo4CV, td_BMperiodo44CV, quant4CV, td_BMdatapag4CV, td_BMobs_4CV,
td_BMn5CV, td_BMnproc5CV, td_BMrepasse5CV, td_BMcontrapartida5CV, td_BMempenho5CV, td_BMnotafiscal5CV, td_BMperiodo5CV, td_BMperiodo55CV, quant5CV, td_BMdatapag5CV, td_BMobs_5CV,
td_BMn6CV, td_BMnproc6CV, td_BMrepasse6CV, td_BMcontrapartida6CV, td_BMempenho6CV, td_BMnotafiscal6CV, td_BMperiodo6CV, td_BMperiodo66CV, quant6CV, td_BMdatapag6CV, td_BMobs_6CV,
td_BMn7CV, td_BMnproc7CV, td_BMrepasse7CV, td_BMcontrapartida7CV, td_BMempenho7CV, td_BMnotafiscal7CV, td_BMperiodo7CV, td_BMperiodo77CV, quant7CV, td_BMdatapag7CV, td_BMobs_7CV,
td_BMn8CV, td_BMnproc8CV, td_BMrepasse8CV, td_BMcontrapartida8CV, td_BMempenho8CV, td_BMnotafiscal8CV, td_BMperiodo8CV, td_BMperiodo88CV, quant8CV, td_BMdatapag8CV, td_BMobs_8CV, 
td_BMn9CV, td_BMnproc9CV, td_BMrepasse9CV, td_BMcontrapartida9CV, td_BMempenho9CV, td_BMnotafiscal9CV, td_BMperiodo9CV, td_BMperiodo99CV, quant9CV, td_BMdatapag9CV, td_BMobs_9CV, 

td_BMn10CV, td_BMnproc10CV, td_BMrepasse10CV, td_BMcontrapartida10CV, td_BMempenho10CV, td_BMnotafiscal10CV, td_BMperiodo10CV, td_BMperiodo1010CV, quant10CV, td_BMdatapag10CV, td_BMobs_10CV, 
td_BMn11CV, td_BMnproc11CV, td_BMrepasse11CV, td_BMcontrapartida11CV, td_BMempenho11CV, td_BMnotafiscal11CV, td_BMperiodo111RP, td_BMperiodo1111CV, quant11CV, td_BMdatapag11CV,  td_BMobs_11CV,
td_BMn12CV, td_BMnproc12CV, td_BMrepasse12CV, td_BMcontrapartida12CV, td_BMempenho12CV, td_BMnotafiscal12CV, td_BMperiodo12CV, td_BMperiodo1212CV, quant12CV, td_BMdatapag12CV, td_BMobs_12CV,
td_BMn13CV, td_BMnproc13CV, td_BMrepasse13CV, td_BMcontrapartida13CV, td_BMempenho13CV, td_BMnotafiscal13CV, td_BMperiodo13CV, td_BMperiodo1313CV, quant13CV, td_BMdatapag13CV, td_BMobs_13CV,
td_BMn14CV, td_BMnproc14CV, td_BMrepasse14CV, td_BMcontrapartida14CV, td_BMempenho14CV, td_BMnotafiscal14CV, td_BMperiodo14CV, td_BMperiodo1414CV, quant14CV, td_BMdatapag14CV, td_BMobs_14CV,
td_BMn15CV, td_BMnproc15CV, td_BMrepasse15CV, td_BMcontrapartida15CV, td_BMempenho15CV, td_BMnotafiscal15CV, td_BMperiodo15CV, td_BMperiodo1515CV, quant15CV, td_BMdatapag15CV, td_BMobs_15CV,

td_ValorTotalContratoCV, td_ValorTotalBoletimCV, td_SaldoTotalContratualCV, td_VigenciaContratualCV


) 





VALUES ('$PROCLICITATORIOcv','$PROCADMcv','$nome','$NCONTRATOcv', '$ORDEMSERVcv', '$VIGENCIAINICIALcv',

'$VALOREPASSEcv','$VALORCONTRAPcv','$VALORCTcv','$OBJETOcv',

'$NTA1cv','$PROCTA1cv','$PRAZOTA1cv','$VALORTA1cv','$PARALISACAOTA1cv', '$OBSTA1cv',
'$NTA2cv','$PROCTA2cv','$PRAZOTA2cv','$VALORTA2cv','$PARALISACAOTA2cv', '$OBSTA2cv',
'$NTA3cv','$PROCTA3cv','$PRAZOTA3cv','$VALORTA3cv','$PARALISACAOTA3cv', '$OBSTA3cv',

'$ORGAOCONCEDcv','$NCVcv','$VIGENCIACVicv','$VIGENCIACViicv','$SALDORPcv','$SALDOCPcv ','$SALDOCVcv',

'$NRECEITA1cv','$VALORRPRECEITA1cv','$VALORCPRECEITA1cv','$DATARECEITA1cv',
'$NRECEITA4cv','$VALORRPRECEITA4cv','$VALORCPRECEITA4cv','$DATARECEITA4cv ',
'$NRECEITA2cv','$VALORRPRECEITA2cv','$VALORCPRECEITA2cv','$DATARECEITA2cv',
'$NRECEITA5cv','$VALORRPRECEITA5cv','$VALORCPRECEITA5cv','$DATARECEITA5cv',
'$NRECEITA3cv','$VALORRPRECEITA3cv','$VALORCPRECEITA3cv','$DATARECEITA3cv',
'$NRECEITA4cv','$VALORRPRECEITA4cv','$VALORCPRECEITA4cv','$DATARECEITA4cv',

'$NTA4cv','$PRAZOTA4cv','$VALORTA4cv','$PARALISACAOTA4cv','$OBSTA4cv',
'$NTA5cv','$PRAZOTA5cv','$VALORTA5cv','$PARALISACAOTA5cv','$OBSTA5cv',
'$NTA6cv','$PRAZOTA6cv','$VALORTA6cv','$PARALISACAOTA6cv','$OBSTA6cv',

'$NBM1cv','$PROCADM1cv','$RP1cv','$CP1cv','$NE1cv','$NF1cv','$PERIDO1cv','$PERIODO11cv','$VALOR1cv','$DATAPAG1cv','$OBS1cv',
'$NBM2cv','$PROCADM2cv','$RP2cv','$CP2cv','$NE2cv','$NF2cv','$PERIDO2cv','$PERIODO22cv','$VALOR2cv','$DATAPAG2cv','$OBS2cv',
'$NBM3cv','$PROCADM3cv','$RP3cv','$CP3cv','$NE3cv','$NF3cv','$PERIDO3cv','$PERIODO33cv','$VALOR3cv','$DATAPAG3cv','$OBS3cv',
'$NBM4cv','$PROCADM4cv','$RP4cv','$CP4cv','$NE4cv','$NF4cv','$PERIDO4cv','$PERIODO44cv','$VALOR4cv','$DATAPAG4cv','$OBS4cv',
'$NBM5cv','$PROCADM5cv','$RP5cv','$CP5cv','$NE5cv','$NF5cv','$PERIDO5cv','$PERIODO55cv','$VALOR5cv','$DATAPAG5cv','$OBS5cv',

'$NBM6cv','$PROCADM6cv','$RP6cv','$CP6cv','$NE6cv','$NF6cv','$PERIDO6cv','$PERIODO66cv','$VALOR6cv','$DATAPAG6cv','$OBS6cv',
'$NBM7cv','$PROCADM7cv','$RP7cv','$CP7cv','$NE7cv','$NF7cv','$PERIDO7cv','$PERIODO77cv','$VALOR7cv','$DATAPAG7cv','$OBS7cv',
'$NBM8cv','$PROCADM8cv','$RP8cv','$CP8cv','$NE8cv','$NF8cv','$PERIDO8cv','$PERIODO88cv','$VALOR8cv','$DATAPAG8cv','$OBS8cv',
'$NBM9cv','$PROCADM9cv','$RP9cv','$CP9cv','$NE9cv','$NF9cv','$PERIDO9cv','$PERIODO99cv','$VALOR9cv','$DATAPAG9cv','$OBS9cv',

'$NBM10cv','$PROCADM10cv','$RP10cv','$CP10cv','$NE10cv','$NF10cv','$PERIDO10cv','$PERIODO1010cv','$VALOR10cv','$DATAPAG10cv','$OBS10cv',
'$NBM11cv','$PROCADM11cv','$RP11cv','$CP11cv','$NE11cv','$NF11cv','$PERIDO11cv','$PERIODO111cv','$VALOR11cv','$DATAPAG11cv','$OBS11cv',
'$NBM12cv','$PROCADM12cv','$RP12cv','$CP12cv','$NE12cv','$NF12cv','$PERIDO12cv','$PERIODO1212cv','$VALOR12cv','$DATAPAG12cv','$OBS12cv',
'$NBM13cv','$PROCADM13cv','$RP13cv','$CP13cv','$NE13cv','$NF13cv','$PERIDO13cv','$PERIODO1313cv','$VALOR12cv','$DATAPAG12cv','$OBS12cv',
'$NBM14cv','$PROCADM14cv','$RP14cv','$CP14cv','$NE14cv','$NF14cv','$PERIDO14cv','$PERIODO1414cv','$VALOR14cv','$DATAPAG14cv','$OBS14cv',
'$NBM15cv','$PROCADM15cv','$RP15cv','$CP15cv','$NE15cv','$NF15cv','$PERIDO15cv','$PERIODO1515cv','$VALOR15cv','$DATAPAG15cv','$OBS15cv',

'$TOTALCTcv','$TOTALBMcv','$TOTALSALDOcv','$VIGENCIAcv')";

if(mysqli_query($conexao, $sql)){
    header("location: convenio.php");
}else{
    echo "erro no processamento dos dados". $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);


?>

