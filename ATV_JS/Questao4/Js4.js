function conte(){
    var N1 = (document.getElementById('N1')).value;
    var cont = 0
    while (cont <= N1){
        let divNumeros=document.getElementById ('numeros');
        let elementoNumero = document.createElement('p');
        elementoNumero.innerHTML=cont
        console.log(N1);
        if (cont%2!=0){
            elementoNumero.style.backgroundColor = "#8D2699"
        }
        divNumeros.appendChild(elementoNumero);
        cont++
    }
}