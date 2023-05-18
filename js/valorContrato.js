//function valorOper() {
//  
//  let campos = document.querySelectorAll('.valor');  // coleta seleciona o campo .valor -> classe
//  
//  sum = 0
//  for (let index = 0; index < campos.length; index++) { // metodo for para percorrer todos os inputs na classe .valor
//
//     sum += Number(campos[index].value); //somar todos os campos pelo index 0-15
//
//     if (campos === null || campos === "" || isNaN(campos[index])) { // faça algo se o valor focar null, NaN ou uma string vazia
//      campos[index] = 0
//      }
//  }
//    let valoresC = document.getElementById('td_ValorTotalBoletimOPC').value = `${Number(sum).toLocaleString('pt-br', {style: 'currency', currency: 'BRL'})}`;
//   console.log(valoresC)
//
//}
//
//function valorResult() {
//    let cmpCont = document.getElementById('td_ValorTotalBoletimOPC').value;
//    let valorContrato = document.getElementById('td_ValorTotalContratoOPC').value;
//    console.log(valorContrato, typeof valorContrato);
//
//    let counter = (cmpCont, valorContrato) => {
//
//      if (counter ===isNaN || counter === null || counter === "" || counter === undefined ) {
//        counter = (cmpCont - valorContrato).toFixed().toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
//      }
//
//      console.log("saldo total contratual"+ counter, typeof counter)
//      return (cmpCont - valorContrato);
//    }
//
//    console.log(cmpCont - valorContrato)
//    
//  };
//


//function valorResult(){
//  let valorResult  = document.getElementById('td_SaldoTotalContratualOPC').value = cmpCont - valorContrato
//  console.log(valorResult, typeof valorResult)
//
//}
//
//.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});

function valorOper() {
  
  let campos = document.querySelectorAll('#valor');
  campos// coleta seleciona o campo .valor -> classe
  
  sum = 0
  for (let index = 0; index < campos.length; index++) { // metodo for para percorrer todos os inputs na classe .valor

     sum += Number(campos[index].value); //somar todos os campos pelo index 0-15

     if (campos === null || campos === "" || isNaN(campos[index])) { // faça algo se o valor focar null, NaN ou uma string vazia
      campos[index] = 0
      }
  }
    let valoresC = document.getElementById('contratos').value = Number(sum).toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
    console.log(valoresC)
}

function result() {
  let valorcontratoReal = document.getElementById('valorContratoReal').value;
  let contratos = document.getElementById('contratos').value;
  let valorContrato = document.getElementById('valorCont').value =  valorcontratoReal.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'})

  
  let formtRestante = document.getElementById('valorResult').value = (contratos - valorContrato).toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
  
  
  console.log(formtRestante);
}