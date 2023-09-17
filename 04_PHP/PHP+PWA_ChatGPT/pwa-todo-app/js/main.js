// Register service worker
if ("serviceWorker" in navigator) {
    navigator.serviceWorker
        .register("service-worker.js")
        .then((registration) => {
            console.log(
                "Service Worker registered with scope:",
                registration.scope
            );
        })
        .catch((error) => {
            console.error("Service Worker registration failed:", error);
        });
}

// Add Task functionality
document.getElementById("add-button").addEventListener("click", () => {
    const taskInput = document.getElementById("task-input");
    const taskList = document.getElementById("task-list");

    if (taskInput.value !== "") {
        const taskItem = document.createElement("li");
        taskItem.textContent = taskInput.value;
        taskList.appendChild(taskItem);
        taskInput.value = "";
    }
});
