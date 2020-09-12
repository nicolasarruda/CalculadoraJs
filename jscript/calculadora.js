/* -- Javascript -- */
	

var valor,valor2, operacao, operando1, operando2, op,valor3;

function reset(){
  valor = document.calculadora.visor.value = null;
  operando1 = document.calculadora.visor.value = null;
  operando2 = document.calculadora.visor.value = null;
  operacao = document.calculadora.visor.value = null;
  valor2 = document.calculadora.visor.value = null;
  op = document.calculadora.visor.value = null;
	}


function btn(num){
  
  if(operacao != null){
    op = operacao;
    valor2 = document.calculadora.visor.value += "";
    operacao = undefined;
  }
  
  if(op != "-" || operando1 != null){
    valor = document.calculadora.visor.value += num;
  }
  else{
    if(document.calculadora.visor.value < 0){
      valor = document.calculadora.visor.value += num;
    } else{
      valor = document.calculadora.visor.value += "-" + num;
    }
  }
}

function btnSymbol(operacao){
  operando1 = valor;
  switch (operacao){
      case "+":
      valor2 = document.calculadora.visor.value = operacao;
      break;
      case "-":
      valor2 = document.calculadora.visor.value = operacao;
      break;
      case "x":
      valor2 = document.calculadora.visor.value = operacao;
      break;
      case "÷":
      valor2 = document.calculadora.visor.value = operacao;
      break;
      case "EXP":
      valor2 = document.calculadora.visor.value = operacao;
      break;
  }
}

function btnResult(){
    operando2 = valor;
    document.calculadora.visor.value = parseInt(operando1);
    document.calculadora.visor1.value = op;
    document.calculadora.visor2.value = parseInt(operando2);
    document.calculadora.visor.value = "";
}

  









  
    
  
  
	


function toggleFullScreen() {
  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
  } else {  
    if (document.cancelFullScreen) {  
      document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
      document.webkitCancelFullScreen();  
    }  
  }  
} 