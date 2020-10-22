// Crear funcións per a convertir una cadena de text en majúscules

// Si tenim això
let cadena =
    "el perro de san roque no tiene rabo porque un ladroncillo se lo ha robado";

// Volem això com a resultat
let cadena_resultant =
    "EL PERRO DE SAN ROQUE NO TIENE RABO PORQUE UN LADRONCILLO SE LO HA ROBADO";

// Fàcil no?

//RESPOSTA
cadena = cadena.toUpperCase();

// Ara el problema real, donat que tenim una frase en minúscules
// Podries convertir a majúscules correctament, es a dir, primera paraula i
// Després de punts?, et faig un exemple:
let cadena_minuscules =
    "en un lugar de la mancha. de cuyo nombre no quiero acordarme";

let cadena_correcta =
    "En un lugar de la mancha. De cuyo nombre no quiero acordarme.";

//RESPOSTA
console.log(
    "en un lugar de la mancha. De cuyo nombre no quiero acordarme.".replace(
        /\b[e]/g,
        c => c.toUpperCase()
    )
);

/*
'your string'.replace(/\b\w/g, l => l.toUpperCase())

L'expresió regular coincideix amb la primera lletra de cada paraula dins de la cadena donada y transforma només aquesta lletra en majúscula:

\ b coincideix amb un límit de paraula (el comienzo o el final de la palabra);
\ w coincideix amb el següent metacaracters [a-zA-Z0-9].

*/
// Una vegada aconseguit podries fer el mateix a php, creant l'script i tal?


let cadena_minuscules = "en un lugar de la mancha. de cuyo nombre no quiero acordarme";

for (let i = 0; i < cadena_minuscules.length; i++) {
    if (cadena_minuscules[i] == 0) {
        // Reemplacem
        cadena_minuscules[i] = cadena_minuscules[i].toUpperCase();
    }
    if (cadena_minuscules[i] == '.' && i < cadena_minuscules.length) {
        cadena_minuscules[i + 1] = cadena_minuscules[i].toUpperCase();
    }

}