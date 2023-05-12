const display = document.querySelector('.display');
const buttons = document.querySelectorAll('button');


buttons.forEach(button => {
  button.addEventListener('click', () => {
   
    const buttonValue = button.textContent;

    
    switch (buttonValue) {
      case 'C':
       
        display.value = '';
        break;
      case '=':
        
        try {
          const result = eval(display.value);
          display.value = result;
        } catch (e) {
          display.value = 'Erro';
        }
        break;
      default:
        
        display.value += buttonValue;
        break;
    }
  });
});