<?php
session_start();

// Initialize tasks if not already set
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Handle Add Task
if (isset($_POST['add-task'])) {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $_SESSION['tasks'][] = ['title' => $title, 'description' => $description, 'completed' => false];
}

// Handle Delete Task
if (isset($_GET['delete'])) {
    $index = intval($_GET['delete']);
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Re-index array
    }
}

// Handle Mark Task as Completed
if (isset($_GET['complete'])) {
    $index = intval($_GET['complete']);
    if (isset($_SESSION['tasks'][$index])) {
        $_SESSION['tasks'][$index]['completed'] = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        #app-container {
            margin: auto;
            width: 80%;
            max-width: 800px;
        }
        h1 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        button {
            padding: 8px 12px;
            font-size: 16px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div id="app-container">
        <h1>To-Do List</h1>
        <form method="post" action="">
            <input type="text" name="title" placeholder="Task Title" required>
            <textarea name="description" placeholder="Task Description" required></textarea>
            <button type="submit" name="add-task">Add Task</button>
        </form>
        <hr>
        <h2>Tasks</h2>
        <?php
        if (!empty($_SESSION['tasks'])) {
            echo "<table><tr><th>Title</th><th>Description</th><th>Status</th><th>Actions</th></tr>";
            foreach ($_SESSION['tasks'] as $index => $task) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($task['title']) . "</td>";
                echo "<td>" . htmlspecialchars($task['description']) . "</td>";
                echo "<td>" . ($task['completed'] ? 'Completed' : 'Pending') . "</td>";
                echo "<td>";
                if (!$task['completed']) {
                    echo "<a href='?complete=$index'><button>Mark as Completed</button></a>";
                }
                echo "<a href='?delete=$index'><button>Delete</button></a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No tasks found.";
        }
        ?>
    </div>
</body>
</html>
