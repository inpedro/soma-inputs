<?php include_once"conexao.php"; ?>


<?php

    $id = $_POST['id'];
$PROCLICITATORIOcv = $_POST['td_CTproceLic'];
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
$dATARECEITA4cv = $_POST['td_CVdatareceita4CV'];

$NRECEITA2cv = $_POST['td_CVnumeroreceita2CV'];
$VALORRPRECEITA2cv = $_POST['td_CVvalorRPreceita2CV'];
$VALORCPRECEITA2cv = $_POST['td_CVvalorCPreceita2CV'];
$dATARECEITA2cv = $_POST['td_CVdatareceita2CV'];

$NRECEITA5cv = $_POST['td_CVnumeroreceit5aCV'];
$VALORRPRECEITA5cv = $_POST['td_CVvalorRPreceita5CV'];
$VALORCPRECEITA5cv = $_POST['td_CVvalorCPreceita5CV'];
$dATARECEITA5cv = $_POST['td_CVdatareceita5CV'];

$NRECEITA3cv = $_POST['td_CVnumeroreceita3CV'];
$VALORRPRECEITA3cv = $_POST['td_CVvalorRPreceita3CV'];
$VALORCPRECEITA3cv = $_POST['td_CVvalorCPreceita3CV'];
$dATARECEITA3cv = $_POST['td_CVdatareceita3CV'];

$NRECEITA6cv = $_POST['td_CVnumeroreceita6CV'];
$VALORRPRECEITA6cv = $_POST['td_CVvalorRPreceita6CV'];
$VALORCPRECEITA6cv = $_POST['td_CVvalorCPreceita6CV'];
$dATARECEITA6cv = $_POST['td_CVdatareceita6CV'];

$NTA4cv = $_POST['td_CVTAnumero1CV'];
$PRAZOTA4cv = $_POST['td_CTTAprazoRP1'];
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
$DATAPAG91cv = $_POST['td_BMdatapag9CV'];
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

$sql = "UPDATE convenio  SET td_CTproceLic = '$PROCLICITATORIOcv', td_CTprocadm = '$PROCADMcv', nome = '$nome', td_CTncontrato = '$NCONTRATOcv', 
td_CTordemsevCV = '$ORDEMSERVcv', td_CTvigenciaCV = '$VIGENCIAINICIALcv',

td_CTrepasseCV = '$VALOREPASSEcv', td_CTcontrapartidaCV = '$VALORCONTRAPcv', td_CTvalorcontratualCV = '$VALORCTcv', td_CTobjeto = '$OBJETOcv',

td_CTTAnumeroCV1 = '$NTA1cv', td_CTTAprocadmCV1 = '$PROCTA1cv', td_CTTAprazoCV1 = '$PRAZOTA1cv', td_CTTAvalorCV1 = '$VALORTA1cv', 
td_CTTAparalisacaoCV1 = '$PARALISACAOTA1cv', td_CTTAobsCV1 = '$OBSTA1cv', 

td_CTTAnumeroCV2 = '$NTA2cv', td_CTTAprocadmCV2 = '$PROCTA2cv', td_CTTAprazoCV2 = '$PRAZOTA2cv', td_CTTAvalorCV2 = '$VALORTA2cv', 
td_CTTAparalisacaoCV2 ='$PARALISACAOTA2cv', td_CTTAobsCV2 = , 

td_CTTAnumeroCV3 = '$NTA3cv', td_CTTAprocadmCV3 = '$PROCTA3cv', td_CTTAprazoCV3 = '$PRAZOTA3cv', td_CTTAvalorCV3 = '$VALORTA3cv', 
td_CTTAparalisacaoCV3 = '$PARALISACAOTA3cv', td_CTTAobsCV3 = '$OBSTA3cv',

td_CVorgconcCV = '$ORGAOCONCEDcv', td_CVnconvCV = '$NCVcv', td_CVvigencia1CV = '$VIGENCIACVicv', td_CVvigencia2CV = '$VIGENCIACViicv', 
td_CVsaldoRPCV = '$SALDORPcv', td_CVsaldoCPCV = '$SALDOCPcv', td_CVsaldoconvCV = '$SALDOCVcv',

td_CVnumeroreceita1CV = '$NRECEITA1cv', td_CVvalorRPreceita1CV ='$VALORRPRECEITA1cv', td_CVvalorCPreceita1CV = '$VALORCPRECEITA1cv', td_CVdatareceitaCV1 = '$DATARECEITA1cv',
td_CVnumeroreceita4CV = '$NRECEITA4cv', td_CVvalorRPreceita4CV ='$VALORRPRECEITA4cv', td_CVvalorCPreceita4CV ='$VALORCPRECEITA4cv', td_CVdatareceita4CV ='$DATARECEITA4cv',
td_CVnumeroreceita2CV = '$NRECEITA2cv', td_CVvalorRPreceita2CV ='$VALORRPRECEITA2cv', td_CVvalorCPreceita2CV ='$VALORCPRECEITA2cv', td_CVdatareceita2CV ='$DATARECEITA2cv',
td_CVnumeroreceit5aCV = '$NRECEITA5cv', td_CVvalorRPreceita5CV ='$VALORRPRECEITA5cv', td_CVvalorCPreceita5CV ='$VALORCPRECEITA5cv', td_CVdatareceita5CV ='$DATARECEITA5cv',
td_CVnumeroreceita3CV = '$NRECEITA3cv', td_CVvalorRPreceita3CV ='$VALORRPRECEITA3cv', td_CVvalorCPreceita3CV ='$VALORCPRECEITA3cv', td_CVdatareceita3CV ='$DATARECEITA3cv',
td_CVnumeroreceita6CV = '$NRECEITA4cv', td_CVvalorRPreceita6CV ='$VALORRPRECEITA4cv', td_CVvalorCPreceita6CV ='$VALORCPRECEITA4cv', td_CVdatareceita6CV ='$DATARECEITA4cv',

td_CVTAnumero1CV ='$NTA4cv', td_CTTAprazoRP1 ='$PRAZOTA4cv', td_CVTAvalor1CV ='$VALORTA4cv', td_CVTAparalisacao1CV ='$PARALISACAOTA4cv', td_CVTAobs1CV ='$OBSTA4cv',
td_CVTAnumero2CV ='$NTA5cv', td_CVTAprazo2CV ='$PRAZOTA5cv', td_CVTAvalor2CV ='$VALORTA5cv', td_CVTAparalisacao2CV ='$PARALISACAOTA5cv', td_CVTAobs2CV ='$OBSTA5cv',
td_CVTAnumero3CV ='$NTA6cv', td_CVTAprazo3CV ='$PRAZOTA6cv', td_CVTAvalor3CV ='$VALORTA6cv', td_CVTAparalisacao3CV ='$PARALISACAOTA6cv', td_CVTAobs3CV ='$OBSTA6cv',

td_BMn1CV ='$NBM1cv', td_BMnproc1CV ='$PROCADM1cv', td_BMrepasse1CV ='$RP1cv', td_BMcontrapartida1CV ='$CP1cv', td_BMempenho1CV ='$NE1cv', td_BMnotafiscal1CV ='$NF1', td_BMperiodo1CV ='$PERIDO1cv', td_BMperiodo11CV ='$PERIODO11cv', quant1CV ='$VALOR1cv', td_BMdatapag1CV ='$DATAPAG1cv', td_BMobs_1CV ='$OBS1cv',

td_BMn2CV ='$NBM2cv', td_BMnproc2CV ='$PROCADM2cv', td_BMrepasse2CV ='$RP2cv', td_BMcontrapartida2CV ='$CP2cv', td_BMempenho2CV ='$NE2cv', td_BMnotafiscal2CV ='$NF2cv', td_BMperiodo2CV ='$PERIDO2cv', td_BMperiodo22CV ='$PERIODO22cv', quant2CV ='$VALOR2cv', td_BMdatapag2CV ='$DATAPAG2cv', td_BMobs_2CV ='$OBS2cv',

td_BMn3CV ='$NBM3cv', td_BMnproc3CV ='$PROCADM3cv', td_BMrepasse3CV ='$RP3cv', td_BMcontrapartida3CV ='$CP3cv', td_BMempenho3CV ='$NE3cv', td_BMnotafiscal3CV ='$NF3cv', td_BMperiodo3CV ='$PERIDO3cv', td_BMperiodo33CV ='$PERIODO33cv', quant3CV ='$VALOR3cv', td_BMdatapag3CV ='$DATAPAG3cv', td_BMobs_3CV ='$OBS3cv',

td_BMn4CV ='$NBM4cv', td_BMnproc4CV ='$PROCADM4cv', td_BMrepasse4CV ='$RP4cv', td_BMcontrapartida4CV ='$CP4cv', td_BMempenho4CV ='$NE4cv', td_BMnotafiscal4CV ='$NF4cv', td_BMperiodo4CV =$PERIDO4cv', td_BMperiodo44CV ='$PERIODO44cv', quant4CV ='$VALOR4cv', td_BMdatapag4CV ='$DATAPAG4cv', td_BMobs_4CV ='$OBS4cv',

td_BMn5CV ='$NBM5cv', td_BMnproc5CV ='$PROCADM5cv', td_BMrepasse5CV ='$RP5cv', td_BMcontrapartida5CV ='$CP5cv', td_BMempenho5CV ='$NE5cv', td_BMnotafiscal5CV ='$NF5cv', td_BMperiodo5CV ='$PERIDO5cv', td_BMperiodo55CV ='$PERIODO55cv', quant5CV ='$VALOR5cv', td_BMdatapag5CV ='$DATAPAG5cv', td_BMobs_5CV ='$OBS5cv',

td_BMn6CV ='$NBM6cv', td_BMnproc6CV ='$PROCADM6cv', td_BMrepasse6CV ='$RP6cv', td_BMcontrapartida6CV ='$CP6cv', td_BMempenho6CV ='$NE6cv', td_BMnotafiscal6CV ='$NF6cv', td_BMperiodo6CV ='$PERIODO6cv', td_BMperiodo66CV ='$PERIODO66cv', quant6CV ='$VALOR6cv', td_BMdatapag6CV ='$DATAPAG6cv', td_BMobs_6CV ='$OBS6cv',

td_BMn7CV ='$NBM7cv', td_BMnproc7CV ='$PROCADM7cv', td_BMrepasse7CV ='$RP7cv', td_BMcontrapartida7CV ='$CP7cv', td_BMempenho7CV ='$NE7cv', td_BMnotafiscal7CV = '$NF7cv', td_BMperiodo7CV ='$PERIDO7cv', td_BMperiodo77CV ='$PERIODO77cv', quant7CV ='$VALOR7cv', td_BMdatapag7CV ='$DATAPAG7cv', td_BMobs_7CV ='$OBS7cv',

td_BMn8CV ='$NBM8cv', td_BMnproc8CV ='$PROCADM8cv', td_BMrepasse8CV ='$RP8cv', td_BMcontrapartida8CV ='$CP8cv', td_BMempenho8CV ='$NE8cv',td_BMnotafiscal8CV ='$NF8cv', td_BMperiodo8CV ='$PERIDO8cv', td_BMperiodo88CV ='$PERIODO88cv', quant8CV ='$VALOR8cv', td_BMdatapag8CV ='$DATAPAG8cv', td_BMobs_8CV ='$OBS8cv', 

td_BMn9CV ='$NBM9cv', td_BMnproc9CV ='$PROCADM9cv', td_BMrepasse9CV ='$RP9cv', td_BMcontrapartida9CV ='$CP9cv', td_BMempenho9CV ='$NE9cv', td_BMnotafiscal9CV ='$NF9cv', td_BMperiodo9CV ='$PERIDO9cv', td_BMperiodo99CV ='$PERIODO99cv', quant9CV ='$VALOR19cv', td_BMdatapag9CV ='$DATAPAG9cv', td_BMobs_9CV ='$OBS9cv', 

td_BMn10CV ='$NBM10cv', td_BMnproc10CV ='$PROCADM10cv', td_BMrepasse10CV ='$RP10cv', td_BMcontrapartida10CV ='$CP10cv', td_BMempenho10CV ='$NE10cv', td_BMnotafiscal10CV ='$NF10cv', td_BMperiodo10CV ='$PERIDO10cv', td_BMperiodo1010CV ='$PERIODO1010cv', quant10CV ='$VALOR10cv', td_BMdatapag10CV ='$DATAPAG10cv', td_BMobs_10CV ='$OBS10cv', 

td_BMn11CV ='$NBM11cv', td_BMnproc11CV ='$PROCADM11cv', td_BMrepasse11CV ='$RP11cv', td_BMcontrapartida11CV ='$CP11cv', td_BMempenho11CV ='$NE11cv', td_BMnotafiscal11CV ='$NF11cv', td_BMperiodo11RP ='$PERIODO11cv', td_BMperiodo111CV ='$PERIODO111cv', quant11CV ='$VALOR11cv', td_BMdatapag11CV ='$DATAPAG11cv',  td_BMobs_11CV ='$OBS11cv',

td_BMn12CV ='$NBM12cv', td_BMnproc12CV ='$PROCADM12cv', td_BMrepasse12CV ='$RP12cv', td_BMcontrapartida12CV ='$CP12cv', td_BMempenho12CV ='$NE12cv', td_BMnotafiscal12CV ='$NF12cv', td_BMperiodo12CV ='$PERIDO12cv', td_BMperiodo1212CV ='$PERIODO1212cv', quant12CV ='$VALOR12cv', td_BMdatapag12CV ='$DATAPAG12cv', td_BMobs_12CV ='$OBS12cv',

td_BMn13CV ='$NBM13cv', td_BMnproc13CV ='$PROCADM13cv', td_BMrepasse13CV ='$RP13cv', td_BMcontrapartida13CV ='$CP13cv', td_BMempenho13CV ='$NE13cv',td_BMnotafiscal13CV ='$NF13cv', td_BMperiodo13CV ='$PERIDO13cv', td_BMperiodo1313CV ='$PERIODO1313cv', quant13CV ='$VALOR12cv', td_BMdatapag13CV ='$DATAPAG12cv', td_BMobs_13CV ='$OBS13cv',

td_BMn14CV ='$NBM14cv', td_BMnproc14CV ='$PROCADM14cv', td_BMrepasse14CV ='$RP14cv', td_BMcontrapartida14CV ='$CP14cv', td_BMempenho14CV ='$NE14cv', td_BMnotafiscal14CV ='$NF14cv', td_BMperiodo14CV ='$PERIDO14cv', td_BMperiodo1414CV ='$PERIODO1414cv', quant14CV ='$VALOR14cv', td_BMdatapag14CV ='$DATAPAG14cv', td_BMobs_14CV ='$OBS14cv',

td_BMn15CV ='$NBM15cv', td_BMnproc15CV ='$PROCADM15cv', td_BMrepasse15CV ='$RP15cv', td_BMcontrapartida15CV ='$CP15cv', td_BMempenho15CV ='$NE15cv', td_BMnotafiscal15CV ='$NF15cv', td_BMperiodo15CV ='$PERIDO15cv', td_BMperiodo1515CV ='$PERIODO1515cv', quant15CV ='$VALOR15cv', td_BMdatapag15CV ='$DATAPAG15cv', td_BMobs_15CV ='$OBS15cv',


td_ValorTotalContratoCV ='$TOTALCTcv', td_ValorTotalBoletimCV ='$TOTALBMcv',
td_SaldoTotalContratualCV ='$TOTALSALDOcv', td_VigenciaContratualCV ='$VIGENCIAcv'
WHERE id= '$id' ";

if (mysqli_query($conexao, $sql)){

echo "<script>alert('Cadastro Salvo com Sucesso!');window.location = 'convenio.php?id=$id';
</script>";

    //header("location: editarConvenio.php?id=$id ");
}else{
    echo "erro em ". $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);


?>
