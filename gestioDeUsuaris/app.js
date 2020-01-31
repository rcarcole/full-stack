document.querySelector("form").addEventListener("submit", afegirUsuari);
document.getElementById("obtenirLlista").addEventListener("click", obtenirLlista);

function submit(event) {
    event.preventDefault();
    console.log("Hola mundo");
    let id = document.getElementById("id").value;
    let first = document.getElementById("first").value;
    let last = document.getElementById("last").value;
    let handle = document.getElementById("handle").value;
    let taula = document.getElementById("taula");
    console.log(id, first, last, handle);
    taula.innerHTML += `<tr><td>${id}</td><td>${first}</td><td>${last}</td><td>${handle}</td></tr>`;
}


function obtenirLlista() {
    console.log("hola");
    $.ajax({
            type: "POST",
            url: "obtenirLlista.php",
            data: { gestioUsuaris: true }
        })
        .done(function(msg) {
            console.log("Data Saved: " + msg);
            let usuaris = JSON.parse(msg);
            let taula = document.getElementById("taula");
            taula.innerHTML = '';
            for (usuari of usuaris) {
                taula.innerHTML += `<tr><td>${usuari.id}</td><td>${usuari.first}</td><td>${usuari.last}</td><td>${usuari.handle}</td><td><i class="fas fa-trash-alt esborrar" onclick="borrarUsuari(${usuari.id})"></i></td></tr>`;
            }
        });
}

function afegirUsuari(event) {
    event.preventDefault();
    $.ajax({
            type: "POST",
            url: "afegirUsuari.php",
            data: {
                first: document.getElementById("first").value,
                last: document.getElementById("last").value,
                handle: document.getElementById("handle").value
            }
        })
        .done(function(msg) {
            console.log("Data Saved: " + msg);
            obtenirLlista();
        });
}

function borrarUsuari(id) {
    console.log("fjgk");
    $.ajax({
            type: "POST",
            url: "esborrarUsuari.php",
            data: {
                esborrar: true,
                id: id
            }
        })
        .done(function(msg) {
            console.log("Data Saved: " + msg);
            obtenirLlista();
        });
}