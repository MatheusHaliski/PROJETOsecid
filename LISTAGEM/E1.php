<?php
// Include your database connection
include('connection.php');
include('connection2.php');
if (isset($_POST['form51'])) {
        $var1 = mysqli_real_escape_string($connection, $_POST['d1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['d2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['d3']);
        header('location:IndexYH.php?query='.urlencode($var1).'&query2='.urlencode($var2).'&query3='.urlencode($var3));
        exit;
    }
?>