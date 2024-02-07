
<?php
// Include your database connection
include('connection.php');
include('connection2.php');
echo 'OK';
// Check if the form is submitted


if (isset($_POST['id22'])){
$id2 = mysqli_real_escape_string($connection, $_POST['id22']);
$ssd = "DELETE FROM Regionais WHERE ID_Regional = $id2";
mysqli_query($connection, $ssd);
header('Location: Index5.php');
exit;
}

if (isset($_POST['id23'])){
    $id3 = mysqli_real_escape_string($connection, $_POST['id23']);
    $ssd = "DELETE FROM data WHERE ID = $id3";
    mysqli_query($connection, $ssd);
    header('Location: IndexA.php');
    exit;
    }


if (isset($_POST['id1'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id1']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresCascavel WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index3.php');
    exit;
}
if (isset($_POST['id33'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id33']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresGuarapuava WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index3A.php');
    exit;
}
if (isset($_POST['id2'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id2']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresCampoMourao WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index31.php');
    exit;
}

if (isset($_POST['id3'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id3']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresCuritiba WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index32.php');
    exit;
}
if (isset($_POST['id4'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id4']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresLondrina WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index33.php');
    exit;
}
if (isset($_POST['id5'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id5']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresMaringa WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index34.php');
    exit;
}
if (isset($_POST['id6'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id6']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresPatoBranco WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index35.php');
    exit;
}
if (isset($_POST['id7'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id7']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresPontaGrossa WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index36.php');
    exit;
}
if (isset($_POST['id8'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id8']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresSantoAntoniodaPlatina WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index37.php');
    exit;
}
if (isset($_POST['id9'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id9']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresUmuarama WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index38.php');
    exit;
}
if (isset($_POST['id10'])) {
    // Get the ID from the form submission
    $id = mysqli_real_escape_string($connection, $_POST['id10']);
 
    echo 'OK'.$id;

    $sss = "DELETE FROM ServidoresUniaodaVitoria WHERE ID_Servidor = $id";

    mysqli_query($connection, $sss);
    echo 'OK';
    // Redirect back to the index3.php page
    header('Location: Index39.php');
    exit;
}
?>
</body>
</html>