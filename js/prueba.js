//declarar
var persona = {
	nombre = "Franklin",
	edad = 20
}
//hoisting js
console.log(miNomre);
var miNomre = "Franklin";
hey()
function hey(){
	console.log("hola " + miNomre)
}
var miNomre = "Franklin";
var edad = 18;
 if (edad === 18) {
 	console.log("puedes votar, sera tu primera votación");
 } else if (edad > 18) {
 	console.log("Puedes votar de nuevo");
 } else if (edad < 18){
 	console.log("No puedes votar");
 }
//condicional rapido
condicion ? true : false;

//Reto piedra papel o tijera

var pi = "piedra";
var pa = "papel";
var ti = "tijera";
var resultado;
function juego(usuario, pc){
	if (usuario === pc){
		console.log("Empate");
	}else if(usuario === ti && pc === pa){
		console.log("Ganaste");
	}else if(usuario === pa && pc === ti){
		console.log("Perdiste");
	}else if(usuario === pi && pc === pa){
		console.log("Perdiste");
	}else if(usuario === pa && pc === pi){
		console.log("Ganaste");
	}else if(usuario === pi && pc === ti){
		console.log("Ganaste");
	}else if(usuario === ti && pc === pi){
		console.log("Perdiste");
	}else {
		console.log("Juega de nuevo");
	}
}

juego(pi,pa);

//switch

var numero = 1;

switch(numero){
	case 1:
		console.log("Soy un uno");
		break;
	case 10:
		console.log("Soy un diez");
		break;
	default:
		console.log("Ingresa un valor valido");
}

//reto piedra papel o tijera con swtich

var pregunta = promt("Ingresa tu opción: piedra, papel o tijera ");
var usuario = pregunta.toLowerCase();
var options = ["piedra", "papel", "tijera"];
var pc = options[Math.floor(Math.random()*3)]
switch (true){
	case usuario === pc:
		console.log("Empate");
		break;
	case (usuario === 'tijera' && pc === 'papel'):
		console.log("Ganaste");
		break;
	case (usuario === 'papel' && pc === 'tijera'):
		console.log("Perdiste");
		break;
	case (usuario === 'piedra' && pc === 'papel'):
		console.log("Perdiste");
		break;
	case (usuario === 'papel' && pc === 'piedra'):
		console.log("Ganaste");
		break;
	case (usuario === pi && pc === 'tijera'):
		console.log("Ganaste");
		break;
	case (usuario === 'tijera' && pc === 'piedra'):
		console.log("Perdiste");
		break;
	default:
		console.log("Juega de nuevo");
		break;
}

//Arrays

var frutas = ["pera", "piña", "uva", "platano"];
 console.log(frutas)
//------
var estudiantes = ["Maria", "Jose", "Rosa", "Daniel"];

function saludarEstudiantes(estudiante){
    console.log(`Hola, ${estudiante}`);
}

for(var estudiante of estudiantes){
    saludarEstudiantes(estudiante);
}

//----
var estudiantes = ["Maria", "Jose", "Rosa", "Daniel"];

function saludarEstudiantes(estudiante){
    console.log(`Hola, ${estudiante}`);
}

while(estudiantes.length > 0){
    var estudiante = estudiantes.shift();
    saludarEstudiantes(estudiante);
}

//objetos

var objeto = {
    marca: "Toyota",
    modelo: "Corolla",
    annio: 2020,
    detalleDelAuto: function(){
        console.log(`Auto ${this.modelo} ${this.annio}`);
    }
};