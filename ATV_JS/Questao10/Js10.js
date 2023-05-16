var operador1 = "";
var operador2 = "";
var operacao = "";

function inserirNumero(numero) {
    console.log(operacao)
    console.log(numero)
    if (operacao === "") {
        operador1 += numero;
        document.getElementById("resultado").innerHTML = operador1;
    } else {
        operador2 += numero;
        document.getElementById("resultado").innerHTML = operador2;
    }
}

function definirOperacao(op) {
    if (operador1 !== "") {
        operacao = op;
        document.getElementById("resultado").innerHTML += " " + operacao + " ";
    }
}


function calcular() {
    var resultado;

    switch (operacao) {
        case "+":
            resultado = parseFloat(operador1) + parseFloat(operador2);
            document.getElementById("resultado").innerHTML = resultado;
            break;
        case "-":
            resultado = parseFloat(operador1) - parseFloat(operador2);
            document.getElementById("resultado").innerHTML = resultado;
            break;
        case "*":
            resultado = parseFloat(operador1) * parseFloat(operador2);
            document.getElementById("resultado").innerHTML = resultado;
            break;
        case "/":
            resultado = parseFloat(operador1) / parseFloat(operador2);
            document.getElementById("resultado").innerHTML = resultado;
            break;
        default:
            alert("Operação inválida!");
            return;
    }
    function limpar() {
      operador1 = "";
      operador2 = "";
      operacao = "";
      document.getElementById("resultado").innerHTML = "";
      }
}