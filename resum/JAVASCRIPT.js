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