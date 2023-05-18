import { valorOper } from "./valorContrato.js";
valorOper();
function campValue() {
    
    let cmp1 = parseFloat(document.getElementById('quant1CV').value);
    let cmp2 = parseFloat(document.getElementById('quant2CV').value);
    let cmp3 = parseFloat(document.getElementById('quant3CV').value);
    let cmp4 = parseFloat(document.getElementById('quant4CV').value);
    let cmp5 = parseFloat(document.getElementById('quant5CV').value);
    let cmp6 = parseFloat(document.getElementById('quant6CV').value);
    let cmp7 = parseFloat(document.getElementById('quant7CV').value);
    let cmp8 = parseFloat(document.getElementById('quant8CV').value);
    let cmp9 = parseFloat(document.getElementById('quant9CV').value);
    let cmp10 = parseFloat(document.getElementById('quant10CV').value);
    let cmp11 = parseFloat(document.getElementById('quant11CV').value);
    let cmp12 = parseFloat(document.getElementById('quant12CV').value);
    let cmp13 = parseFloat(document.getElementById('quant13CV').value);
    let cmp14 = parseFloat(document.getElementById('quant14CV').value);
    let cmp15 = parseFloat(document.getElementById('quant15CV').value);
    //var  = cmp1.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
    
    let valores = document.getElementById('td_ValorTotalBoletimCV').value = `${cmp1+cmp2+cmp3+cmp4+cmp5+cmp6+cmp7+cmp8+cmp9+cmp10+cmp11+cmp12+cmp13+cmp14+cmp15}`;
}

 function valorCont() {
    let campValorCont = parseFloat(document.getElementById('td_ValorTotalContratoCV').value)
    let cmpCont = parseFloat(document.getElementById('td_ValorTotalBoletimCV').value)
    let valorResult  = document.getElementById('SaldoTotalContratualCV').value = campValorCont - cmpCont;
    console.log(valorResult)
}




