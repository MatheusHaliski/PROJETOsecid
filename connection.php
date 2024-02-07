<?php
    $dbServerName = 'localhost';
    $dbUserName = 'root';
    $dbPassword = '';
    $dbName = 'first';

    $connection = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
    if($connection->connect_error) {
        echo "$connection->connect_error";
        die("Connection failed: " . $connection->connect_error);
    }
    if(isset($_POST['cadastro'])) {
            $name = mysqli_real_escape_string($connection, $_POST['name']);
            $cpf = mysqli_real_escape_string($connection, $_POST['cpf']);

            $sql = "INSERT INTO user (name, cpf) VALUES ('$name', '$cpf')";
mysqli_query($connection,$sql);
    if(mysqli_query($connection, $sql)) {
                echo 'Success!';
            } else {
                echo 'Error! Could not able to execute $sql' . mysqli_error($connection);
            }
        }

    mysqli_close($connection);
?>