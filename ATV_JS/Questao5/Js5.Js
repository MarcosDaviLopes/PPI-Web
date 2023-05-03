function mudaCor(){
    let cor = aleatorio();
    document.body.style.backgroundColor=cor;
}
function aleatorio(){
    let a = Math.random()*10;
    if(a<=3){
        let b = "green";
        return b;
    }
    else if(a>3&& a<=5){
        let b = "blue";
        return b;
    }
    else if(a>5 && a<=7){
        let b = "red";
        return b;
    }
    else if(a>7 && a<=9){
        let b = 'lightblue'
        return b;
    }
    else(a=10)
        let b = 'black'
        return b;
}