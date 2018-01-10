function dataConta(c){
	if(c.value.length ==2){
		c.value += '/';
	}
	if(c.value.length==5){
		c.value += '/';	
	}
}

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
