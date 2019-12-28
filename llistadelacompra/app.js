// https://blog.usejournal.com/develop-a-to-do-list-app-in-vanilla-javascript-95377ec370c5

loadEvents();
// load every event in the page
function loadEvents() {
    document.querySelector("form").addEventListener("submit", submit);
    // recently added
    document.getElementById("clear").addEventListener("click", clearList);
    // recently added
    document.querySelector("ul").addEventListener("click", deleteOrTick);
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
    var r = confirm("Press a button!");
    parentNode.removeChild(remove);
}

// tick a task
function tickTask(e) {
    console.log(e);
    const task = e.target.nextSibling;
    if (e.target.checked) {
        task.style.textDecoration = "line-through";
        task.style.color = "#08e000";
    } else {
        task.style.textDecoration = "none";
        task.style.color = "#2f4f4f";
    }
}