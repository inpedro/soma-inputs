function CalculaContrato() {
  
  let campos = document.querySelectorAll('.valor_input');
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
    result();
}

function result() {
  let valorContrato1 = document.getElementById('valorContratoReal').value;
  let valorContrato2 = document.getElementById('valorCont').value = valorContrato1;

  
  let formtRestante = document.getElementById('valorResult');
  formtRestante.value = (valorContrato2 - sum).toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
  
  console.log(formtRestante);
}


botao = document.querySelector(".botaoCalc");
botao.onclick = CalculaContrato;
