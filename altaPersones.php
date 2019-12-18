<?php

/*
diferencies i exemples: isset(), is_null() y empty()
https://cybmeta.com/isset-is_null-y-empty-diferencias-y-ejemplos-de-uso
*/

//!empty -> la variable existeix pero està buida, no té valor.
//isset -> únicament comprova que la variable existeix, independentment de si està buida o no.
if (!empty($_POST["nom"]) && !empty($_POST["cognom"]) && !empty($_POST["email"]) && !empty($_POST["edat"])){
    $nom=$_POST["nom"];
    $cognom=$_POST["cognom"];
    $email=$_POST["email"];
    $edat=$_POST["edat"];
}
    else{
        echo "No hi ha dades que mostrar!!";
    }


/*
Afegir un var_dump, per cada dada que ens arribe des-de el formulari
    deu vindre per post, i es deu mostrar només si ens venen dades, en
    cas contari mostar un missatge que diga que no hi han dades que mostrar
*/