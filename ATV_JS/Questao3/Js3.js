function conte(){
    var cont = 0
    while (cont <= 100){
        let divNumeros=document.getElementById ('numeros');
        let elementoNumero = document.createElement('p');
        elementoNumero.innerHTML=cont
        console.log(cont);
        if (cont%2!=0){
            elementoNumero.style.backgroundColor = "#8D2699"
        }
        divNumeros.appendChild(elementoNumero);
        cont++
    }
}