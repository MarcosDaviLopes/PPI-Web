var operador1 = "";
var operador2 = "";
var operacao = "";

function inserirNumero(numero) {
    if (operacao === "") {
        operador1 += numero;
        document.getElementById("resultado").value = operador1;
    } else {
        operador2 += numero;
        document.getElementById("resultado").value = operador2;
    }
}

function definirOperacao(op) {
    if (operador1 !== "") {
        operacao = op;
        document.getElementById("resultado").value += " " + operacao + " ";
    }
}

function calcular() {
    var resultado;

    switch (operacao) {
        case "+":
            resultado = parseFloat(operador1) + parseFloat(operador2);
            break;
        case "-":
            resultado = parseFloat(operador1) - parseFloat(operador2);
            break;
        case "*":
            resultado = parseFloat(operador1) * parseFloat(operador2);
            break;
        case "/":
            resultado = parseFloat(operador1) / parseFloat(operador2);
            break;
        default:
            alert("Operação inválida!");
            return;
    }
    function limpar() {
      operador1 = "";
      operador2 = "";
      operacao = "";
      document.getElementById("resultado").value = "";
      }
}