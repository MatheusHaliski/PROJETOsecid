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
        p{
            font-size: xx-large;
            padding-left:20px;
        }
        #p1{
            font-size: xx-large;
            padding-left:40px;
        }
        #df3{
            height:4200px;
            width:7200px;
        }
        p:hover{
            display:block;
        }
        .button1{
            display:none;
            width: 200px;
            height: 200px;
            position: absolute;
            left:20px;
            top:50px;
            border-radius:20px;
        }
        #v1{
            position: absolute;
            top:170px;
        }
        #v2{
            position: absolute;
            top:310px;
        }
        .button1:hover{
            display:block;
            background-color: #f5f5f5;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left:0px;
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
        .btn4 {
            width: 950px;
            height: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 10%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn4:hover{
            background-color: #f5f5f5;
        }
        button {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        button:hover{
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <script>
        function handleHover(){
            let f4 = document.getElementById("v1");
            f4.style.display = "block";
            let f5 = document.getElementById("v2");
            f5.style.display = "block";
        }
        function handleHover1(){
            let f41 = document.getElementById("v1");
            f41.style.display = "none";
            let f5 = document.getElementById("v2");
            f5.style.display =  "none";
        }
    </script>
    <button id="btn4" class="btn4" onmouseover="handleHover()"><p>☰</p></button>
    <button id="v1" class="button1" onclick='window.location.href="connection.php"'>Insert Row</button>
<button id="v2" class="button1" onclick='window.location.href="exemplotabledelete.php"'>Delete Row</button>
<div id="df3" onmouseover="handleHover1()">
<div class="table-container">

<?php

$action = isset($_GET['action']) ? $_GET['action'] : '';
include('connection.php');
$data = mysqli_query($connection,$sqe);
switch ($action) {
    case 'insert':
        header('location:connection.php');
        break;
    case 'delete':
        header('location:connection.php');
        break;
    case 'update':
        // Logic for updating a row (you can implement this)
        header('location:connection.php');
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
</div>
</body>
</html>
