<?php
// Include your database connection
include('connection.php');
include('connection2.php');
if (isset($_POST['form15'])) {
    echo 'OK345';
    $regionalSelecionada = $_POST["regional"];
    echo $regionalSelecionada;
    if ($regionalSelecionada=="CAS"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY3.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="GUA"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY3A.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="CAM"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY31.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="CWB"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY32.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="LON"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY33.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="MAR"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY34.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="PTB"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY35.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="PON"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY36.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="SAP"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY37.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="UMU"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY38.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }else if ($regionalSelecionada=="UNI"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        header('location:IndexY39.php?query='.urlencode($var1).'&query2='.urlencode($var2));
        exit;
    }
}

?>