document.querySelector("form").addEventListener("submit", submit);


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