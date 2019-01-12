/* 
* VARIABLES
*/

var pelicula = "Aquaman";
console.log(pelicula);

var entrada = 40;
console.log(entrada);

var enCartelera = true;
console.log(enCartelera);

var diasEnCartelera = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
console.log(diasEnCartelera);

var secuela;
console.log(secuela);

var ultimoDiaCartelera = null;
console.log(ultimoDiaCartelera);

/* 
* OPERACIONES
*/

var inicioFilmancion = 2016;
var estreno = 2018;

var duracion = estreno - inicioFilmancion;

console.log(duracion+' años');

/*
* IF/ELSE
*/

var genero = "accion";

if(genero == "accion"){
    console.log(pelicula+" es de accion");
}else if(genero == "romantica"){
    console.log(pelicula+" es romantica");
}else{
    console.log(pelicula+" no tiene genero");
}


/*
* SWITCH
*/

var estudio = "marvel";
//var estudio = prompt("Que estudio filmo la pelicula?");
switch(estudio) {
    case 'marvel':
    console.log("Lo filmo marvel estudio");
    break;
    case 'dc':
    console.log("Lo filmo DC comic");
    break;
    default:
    console.log("Es una anime");
}


// Ejercicio: personalidad segun signos


/*
* FOR
*/
console.log("Loop con FOR");
var generosMusica = ["Rock","Metal","Cumbia","Regueton","Disco"];
for(var i = 0; i<generosMusica.length; i++){
    console.log(generosMusica[i]);
}

/*
* WHILE
*/
console.log("Loop con WHILE");
var j = 0;
while(j < generosMusica.length){
    console.log(generosMusica[j]);
    j++;
}

/*
* DO WHILE
*/
console.log("Loop con DO WHILE");
k = 0;
do{
    console.log(generosMusica[k]);
    k = k+1;
}while(k < generosMusica.length)


// Ejercicio arreglo de años de nacimiento y que muestre si es mayor de edad

