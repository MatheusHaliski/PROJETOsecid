<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Table Example</title>
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .menu {
            width: 200px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .table-container {
            flex: 1;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        .table-container {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="?action=insert">Insert Row</a></li>
        <li><a href="?action=delete">Delete Row</a></li>
        <li><a href="?action=update">Update Row</a></li>
    </ul>
</div>
<div class="table-container">
<?php
// Sample data for the table
$data = array(
    array("Nome", "Idade", "Departamento"),
    array("Matheus", 25, "CPO"),
    array("Luan", 30, "TI"),
    array("Silvia", 52, "CPO")
);
// Check the action from the URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Process the action
switch ($action) {
    case 'insert':
        location('connection.php');
        break;
    case 'delete':
        // Logic for deleting a row (you can implement this)
        location('connection.php');
        break;
    case 'update':
        // Logic for updating a row (you can implement this)
        location('connection.php');
        break;
    default:
        // Display the table by default
// Output the table structure
  }
echo "<table id='tab1' border='1'>";

// Loop through the data to create rows and columns
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</div>
</body>
</html>
