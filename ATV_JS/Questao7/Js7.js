function muda() {
    var botao = document.getElementById("botao");
    var largura = window.innerWidth;
    var altura = window.innerHeight;
    var PX = Math.floor(Math.random() * (largura - botao.offsetWidth));
    var PY = Math.floor(Math.random() * (altura - botao.offsetHeight));
    botao.style.left = PX + "px";
    botao.style.top = PY + "px";
}