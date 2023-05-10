function converterTemperaturaC() {
    let temperatura = parseFloat(document.getElementById("Celsius").value);

    let temperatura_kelvin;
    let temperatura_fahrenheit;
    temperatura_kelvin = temperatura + 273.15;
    temperatura_fahrenheit = temperatura * 1.8 + 32;
        
    document.getElementById("kelvin").value = temperatura_kelvin.toFixed(2);
    document.getElementById("fahrenheit").value = temperatura_fahrenheit.toFixed(2);
}
function converterTemperaturaK() {
    let temperatura = parseFloat(document.getElementById("kelvin").value);

    let temperatura_celsius;
    let temperatura_fahrenheit;
    temperatura_celsius = temperatura - 273.15;
    temperatura_fahrenheit = (temperatura-273)*1.8+32;
        
    document.getElementById("Celsius").value = temperatura_celsius.toFixed(2);
    document.getElementById("fahrenheit").value = temperatura_fahrenheit.toFixed(2);
}
function converterTemperaturaF() {
    let temperatura = parseFloat(document.getElementById("fahrenheit").value);

    let temperatura_kelvin;
    let temperatura_fahrenheit;
    temperatura_celsius = (temperatura-32)/1.8;
    temperatura_kelvin = (temperatura-32)*(5/9) + 273,15;
        
    document.getElementById("Celsius").value = temperatura_celsius.toFixed(2);
    document.getElementById("kelvin").value = temperatura_kelvin.toFixed(2);
}