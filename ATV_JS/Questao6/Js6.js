function adicionarItem() {
    var texto = document.getElementById("texto").value;
    var novoItem = document.createElement("li");
    var textoItem = document.createTextNode(texto);
    novoItem.appendChild(textoItem);
    document.getElementById("lista").appendChild(novoItem);
    document.getElementById("texto").value = "";
}