// Tenim aquestes dos variables, que poden contindre numeros
// No es pot modificar el seu valor, donat que no el sabem a priori
// Son variables que se asignen des-de el servidor
let numero1 = "10";
let numero2 = 20;

// Necesitem enmagatzenar en la següent variable el resultat
let resultat = 0;

// I aplicar el impost corresponent
let impost = 21;

// Pero tenim varios problemes que resoldre

// Aquesta comprovació no està del tot be i el resultat tampoc del tot
if (numero1 > 5) {
    numero2 += parseInt(numero1); // Sumar els dos números
    resultat = numero2 * (21 / 100); // Aplicar el impost i asignar el valor
}

// Podries resoldre-la?

// Imprimim el resultat de la mateixa operació
console.log(resultat);

// Una vegada resolt, si tens ganes podries fer una funció per a resoldre
// aquest problema en futures? implementacions

function sumar(numero1, numero2) {
    if (typeof(numero1) !== "number")
        numero1 = parseInt(numero1);
    if (typeof(numero2) !== "number")
        numero2 = parseInt(numero2);
    return numero1 + numero2;
}

resultat = sumar(numero1, numero2) * (21 / 100);

// Podries també convertir aques problema a php en el script problema1.php?