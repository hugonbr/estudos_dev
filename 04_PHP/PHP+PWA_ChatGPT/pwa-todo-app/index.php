<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="manifest" href="manifest.json">
    <title>PWA Todo App</title>
</head>

<body>
    <header>
        <h1>PWA Todo App</h1>
    </header>
    <main>
        <ul id="task-list">
            <!-- Task items will be added here dynamically -->
        </ul>
        <div id="add-task">
            <input type="text" id="task-input" placeholder="Enter a new task">
            <button id="add-button">Add Task</button>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>