
<?php
// Include your database connection
include('connection.php');
include('connection2.php');
echo 'OK123';
// Check if the form is submitted


if (isset($_POST['form11'])) {
    // Get the ID from the form submission
    $n = mysqli_real_escape_string($connection, $_POST['d1']);
    $a = mysqli_real_escape_string($connection, $_POST['d2']);
    $de = mysqli_real_escape_string($connection, $_POST['d3']);
    // Execute the DELETE query
    $ssc = "INSERT Regionais(ID_Regional,Municipio,Nome_Regional) VALUES ('$n','$a','$de')";
    mysqli_query($connection, $ssc);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index5.php');
    exit;
}



if (isset($_POST['form1'])) {
    // Get the ID from the form submission
    $name = mysqli_real_escape_string($connection, $_POST['txtText1']);
    $age = mysqli_real_escape_string($connection, $_POST['txtText2']);
    $dep = mysqli_real_escape_string($connection, $_POST['departamento']);
    echo 'OK'.$name.$age.$dep;
    // Execute the DELETE query
    $sss = "INSERT data(name,age,departament) VALUES ('$name','$age','$dep')";
    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: IndexA.php');
    exit;
}

?>
