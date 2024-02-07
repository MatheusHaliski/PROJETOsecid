<?php
// Include your database connection
include('connection.php');
include('connection2.php');
if (isset($_POST['form22'])) {
    echo 'OK345';
    $regionalSelecionada = $_POST["regional"];
    echo $regionalSelecionada;
    if ($regionalSelecionada=="GUA"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresGuarapuava VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index3A.php');
        exit;
    }else if ($regionalSelecionada=="CWB"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresCuritiba VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index32.php');
    }else if ($regionalSelecionada=="CAS"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresCascavel VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index3.php');
        exit;
    }else if ($regionalSelecionada=="CAM"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresCampoMourao VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index31.php');
        exit;
    }else if ($regionalSelecionada=="LON"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresLondrina VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index33.php');
        exit;
    }else if ($regionalSelecionada=="MAR"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresMaringa VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index34.php');
        exit;
    }else if ($regionalSelecionada=="PTB"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresPatoBranco VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index35.php');
        exit;
    }else if ($regionalSelecionada=="PON"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresPontaGrossa VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index36.php');
        exit;
    }else if ($regionalSelecionada=="SAP"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresSantoAntoniodaPlatina VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index37.php');
        exit;
    }else if ($regionalSelecionada=="UMU"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO ServidoresUmuarama VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index38.php');
        exit;
    }else if ($regionalSelecionada=="UNI"){
        $var1 = mysqli_real_escape_string($connection, $_POST['txtText1']);
        $var2 = mysqli_real_escape_string($connection, $_POST['txtText2']);
        $var3 = mysqli_real_escape_string($connection, $_POST['txtText3']);
        $var4 = mysqli_real_escape_string($connection, $_POST['txtText4']);
        $var5 = mysqli_real_escape_string($connection, $_POST['txtText5']);
        $var6 = mysqli_real_escape_string($connection, $_POST['txtText6']);
        $ddd = "INSERT INTO  ServidoresUniaodaVitoria VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";
        mysqli_query($connection,$ddd);
        header('Location: Index39.php');
        exit;
    }
}

?>