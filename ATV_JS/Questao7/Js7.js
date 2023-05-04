function mudarPosicao() {
    var botao = document.getElementById("botao");
    var larguraJanela = window.innerWidth;
    var alturaJanela = window.innerHeight;
    var novaPosicaoX = Math.floor(Math.random() * (larguraJanela - botao.offsetWidth));
    var novaPosicaoY = Math.floor(Math.random() * (alturaJanela - botao.offsetHeight));
    botao.style.left = novaPosicaoX + "px";
    botao.style.top = novaPosicaoY + "px";
}