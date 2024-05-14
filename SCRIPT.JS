// Get references to HTML elements
const taskInput = document.getElementById("taskInput");
const taskList = document.getElementById("taskList");

// Function to add a new task
function addTask() {
    const taskText = taskInput.value.trim();
    
    if (taskText === "") {
        alert("Please enter a task!");
        return;
    }

    // Create a new list item
    const li = document.createElement("li");
    li.innerHTML = `
        <span>${taskText}</span>
        <button onclick="removeTask(this)">Remove</button>
    `;

    // Append the new list item to the task list
    taskList.appendChild(li);

    // Clear the input field
    taskInput.value = "";
}

// Function to mark a task as completed
function completeTask(button) {
    const taskItem = button.parentElement;
    taskItem.classList.toggle("completed");
}

// Function to remove a task
function removeTask(button) {
    const taskItem = button.parentElement;
    taskList.removeChild(taskItem);
}
