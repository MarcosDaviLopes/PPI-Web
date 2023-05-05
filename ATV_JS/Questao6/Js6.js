function adicionarItem() {
    var texto = document.getElementById("texto").value;
    var linha = document.createElement("li");
    var textoItem = document.createTextNode(texto);
    linha.appendChild(textoItem);
    document.getElementById("lista").appendChild(linha);
    document.getElementById("texto").value = "";
}