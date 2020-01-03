// https://blog.usejournal.com/develop-a-to-do-list-app-in-vanilla-javascript-95377ec370c5

loadEvents();
// load every event in the page
function loadEvents() {
    document.querySelector("form").addEventListener("submit", submit);
    // recently added
    document.getElementById("clear").addEventListener("click", clearList);
    // recently added
    document.querySelector("ul").addEventListener("click", deleteOrTick);
    // 
    document.getElementById("guardar").addEventListener("click", saveList);
}

// submit data function
function submit(event) {
    event.preventDefault();
    let input = document.querySelector("input");
    if (input.value != "") addTask(input.value);
    input.value = "";
}

// add tasks
function addTask(task) {
    let ul = document.querySelector("ul");
    let li = document.createElement("li");
    li.innerHTML = `<input type="checkbox"><label>${task}</label><span class="delete">×</span>`;
    ul.appendChild(li);
    document.querySelector(".tasksBoard").style.display = "block";
}

function clearList(e) {
    // setting the ul innerHML to an empty string
    let ul = (document.querySelector("ul").innerHTML = "");
}

// deleteTick
function deleteOrTick(e) {
    if (e.target.className == "delete") deleteTask(e);
    else {
        tickTask(e);
    }
}

// delete task
function deleteTask(e) {
    let remove = e.target.parentNode;
    let parentNode = remove.parentNode;
    var r = confirm("Estàs segur d'esborrar el producte?");
    console.log(e.target.parentNode.querySelector("label").innerText);
    console.log(r);
    if (r === true) {
        parentNode.removeChild(remove);
        $.ajax({
                type: "POST",
                url: "borrar_elemento.php",
                data: { producte: e.target.parentNode.querySelector("label").innerText }
            })
            .done(function(msg) {
                console.log("Data Saved: " + msg);
            });
    }
}

// tick a task
function tickTask(e) {
    const task = e.target.nextSibling;
    if (e.target.checked) {
        task.className = "completed";
    } else {
        task.className = "uncompleted";
    }
}

//
function saveList(event) {
    const lis = document.querySelectorAll("li");
    let productes = [];
    lis.forEach((li) => {
        let estat;
        if (li.querySelector("label").className == "completed") {
            estat = 1;
        } else {
            estat = 0;
        }
        productes.push({
            producte: li.querySelector("label").innerText,
            estat: estat
        });
    });
    //console.log(productes);
    $.ajax({
            type: "POST",
            url: "guardar_llista.php",
            data: { productes: productes }
        })
        .done(function(msg) {
            console.log("Data Saved: " + msg);
        });
}