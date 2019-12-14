// Crear funcións per a convertir una cadena de text en majúscules

// Si tenim açó
let cadena =
    "el perro de san roque no tiene rabo porque un ladroncillo se lo ha robado";

// Volem acó com a resultat
let cadena_resultant =
    "EL PERRO DE SAN ROQUE NO TIENE RABO PORQUE UN LADRONCILLO SE LO HA ROBADO";

// Facil no?

//RESPOSTA
cadena = cadena.toUpperCase();

// Ara el problema real, donat que tenim una frase en minúscules
// Podries convertir a majúscules correctament, es adir, primera paraula i
// Després de punts?, te fique un exemple:
let cadena_minuscules =
    "en un lugar de la mancha. de cuyo nombre no quiero acordarme";

let cadena_correcta =
    "En un lugar de la mancha. De cuyo nombre no quiero acordarme.";


//RESPOSTA
console.log('En un lugar de la mancha. De cuyo nombre no quiero acordarme.'.replace(/\b[e]/g, c => c.toUpperCase()));



/*

'your string'.replace(/\b\w/g, l => l.toUpperCase())

La expresión regular coincide con la primera letra de cada palabra dentro de la cadena dada y transforma solo esa letra en mayúscula:

\ b coincide con un límite de palabra (el comienzo o el final de la palabra);
\ w coincide con el siguiente metacaracteres [a-zA-Z0-9].

/*

// Una vegada aconseguit podries fer el mateix a php, creant el script i tal?