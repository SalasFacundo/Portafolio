
var nombre= document.getElementById('name');
var email= document.getElementById('email');
var phone= document.getElementById('phone');
var message= document.getElementById('message');

var error=document.getElementById('error');

error.style.color = 'red';




var form= document.getElementById('formulario');

form.addEventListener('submit', function(evt){
	evt.preventDefault();
	console.log('enviando formulario');



	var mensajeError=[];

if(nombre.value ===null || nombre.value==='')
{
	mensajeError.push('Ingrese un nombre');
}

if(email.value ===null || email.value==='')
{
	mensajeError.push('Ingrese un email');
}

if(phone.value ===null || phone.value==='')
{
	mensajeError.push('Ingrese un phone');
}

if(message.value ===null || message.value==='')
{
	mensajeError.push('Ingrese un message');
}


error.innerHTML=mensajeError.join(',');
});

if(mensajeError.length==0)
{
	alert("no hay errores");
}

