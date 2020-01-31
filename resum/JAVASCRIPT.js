//VARIABLES

//Una variable es un contenedor de información.

//Palabra reservada "var" y el nombre de la variable, el contenido en este caso es "España", lo ponemos entre comillas porque es un String en este caso, comillas dobles o simples, da igual.
var pais = "España";
var continente = "Europa";
//los numeros van sin comillas, ya que son integers.
var antiguedad = 2019;

//con el console.log veremos en el inspector -> consola, como nos sale el contenido de las variables siguientes:
console.log(pais, continente, antiguedad);

//Para concatenar dos variables, lo hacemos mediante "+"
var pais_y_continente = pais + ' ' + continente;
alert(pais_y_continente);

/*Diferencias entre "let" y "var":
"let" permite definir variables limitando su alcance al bloque, declaración o expresión donde se está usando.
"var" define una variable local en una función sin importar el ámbito del bloque.
Es decir, la diferencia principal es el alcance que tienen las variables y como actuan en funcion de los diferentes bloques.
*/

//Prueba con var:
var numero = 40;
console.log(numero); //valor 40

if (true) {
    var numero = 50;
    console.log(numero); //valor 50
}

console.log(numero); //valor 50

//Prueba con let:
var texto = "Curso JS Robert Carcole";
console.log(texto); // valor "Curso JS Robert Carcole"

if (true) {
    let texto = "Otro curso¿?";
    console.log(texto); // valor Otro curso¿?
}

console.log(texto); // valor "Curso JS Robert Carcole"

/*
    let actua a nivel de bloque, crea esta variable nueva con un nuevo valor solamente dentro del bloque "if"
*/







/*
    DAVID
*/
/*  Evita el funcionament normal de algo. Quan s'envia un formulari lo normal es que es rcarregui la pagina i envii la informacio al servidor, 
    amb el preventDefault controla que no s'envii perque vas a fer una altra cosa.
*/
event.preventDefault();