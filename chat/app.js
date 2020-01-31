document.querySelector("form").addEventListener("submit", submit);


function submit(event) {
    event.preventDefault();
    console.log("hola");
    let Texto = document.getElementById("Texto").value;
    document.getElementById("textTotal").value += Texto + "\n";
    document.getElementById("Texto").value = '';

}



/*
// Apliquem el escoltador d'events
keydown = document.onkeyup = function(evt) {
    evt = evt || window.event; // Per IE
    if (evt.key == "Enter" && evt.key != "Shift") {
        submit(evt);
    }
    console.log(evt.type);
};
*/

let keysPressed = {};

document.addEventListener('keydown', (event) => {
    keysPressed[event.key] = true;
    if (keysPressed['Shift'] && event.key == 'Enter') {} else {
        if (event.key == "Enter") {
            submit(event);
        }
    }
});

document.addEventListener('keyup', (event) => {
    delete keysPressed[event.key];
});