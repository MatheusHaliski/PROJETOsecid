<!-- index.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Delete Row Example</title>
    <link rel="stylesheet" href="styled.css"> 
</head>
    <body>
<header onmouseover="handleHover1()">
    <h1> Lista de Funcionarios Regional  União da Vitória<h1>
</header>
<nav>
        <a href="#">Home</a>
        <a href="#">Sobre</a>
        <a href="#">Serviços</a>
        <a href="#">Contato</a>
</nav>
<div id="ao9">
        <a id="btn1"  onmouseover="handleHover()" > <br> Visualizar Servidores
        <a id="btn11" onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index3.php"'> <br> Cascavel    </a>
        <a id="btn12"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index31.php"'> <br>Campo Mourao   </a>                       
        <a id="btn13"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index32.php"'> <br>Curitiba   </a>                                                             
        <a id="btn14"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index3A.php"'> Guarapuava  </a>                                      
        <a id="btn15"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index33.php"'> Londrina  </a>                                                  
        <a id="btn16"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index34.php"'> Maringa  </a>                                                           
        <a id="btn17"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index35.php"'> Pato Branco   </a>                                                          
        <a id="btn18"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index36.php"'> Ponta Grossa   </a>
        <a id="btn19"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index37.php"'> Santo Antonio da Platina   </a>                                             
        <a id="btn20"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index38.php"'> Umuarama  </a>                                                             
        <a id="btn21"  onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index39.php"'> Uniao da Vitoria  </a>                                                
        </a>  
    <a  id="btn2" onmouseover="handleHover1()" onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index5.php"'> <br> Visualizar Municipios </a>
    <a  id="btn5" onmouseover="handleHover1()" onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index4.html"'> <br> Cadastrar Municipios</a>
    <a  id="btn4" onmouseover="handleHover1()" onclick='window.location.href="http://localhost/SSD3/LISTAGEM/IndexA.php"'><br>  Visualizar Funcionarios - SECID Curitiba </a>
    <a id="btn3" onmouseover="handleHover1()" onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index2.html"'> <br> Cadastrar Funcionario - SECID Curitiba </a>
    <a  id="btn3" style="position:absolute;top: 500px;" onmouseover="handleHover1()" onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index44.html"'> <br> Cadastrar Servidor </a>
    <a  id="btn3s" onmouseover="handleHover1()" onclick='window.location.href="http://localhost/SSD3/LISTAGEM/Index4a.html"'> <br> Filtrar Municipios </a>   
    <a id="btn3d" onmouseover="handleHover1()" onclick='window.location.href="http://localhost/SSD3/LISTAGEM/SearchName.html"'><br>  Filtrar Servidores </a>   
</div>

<script>
function handleHover(){
            let f4 = document.getElementById("btn11");
            f4.style.display = "block";
            let f4a = document.getElementById("btn12");
            f4a.style.display = "block";
            let f4b = document.getElementById("btn13");
            f4b.style.display = "block";
            let f4c= document.getElementById("btn14");
            f4c.style.display = "block";
            let f4ca= document.getElementById("btn15");
            f4ca.style.display = "block";
            let f4cb= document.getElementById("btn16");
            f4cb.style.display = "block";
            let f4cc= document.getElementById("btn17");
            f4cc.style.display = "block";
            let f4cd= document.getElementById("btn18");
            f4cd.style.display = "block";
            let f4ce= document.getElementById("btn19");
            f4ce.style.display = "block";
            let f4cf= document.getElementById("btn20");
            f4cf.style.display = "block";
            let f4cg= document.getElementById("btn21");
            f4cg.style.display = "block";
        }
        function handleHover1(){
            let f41 = document.getElementById("btn11");
            f41.style.display = "none";
            let f41a = document.getElementById("btn12");
            f41a.style.display = "none";
            let f41b = document.getElementById("btn13");
            f41b.style.display = "none";
            let f41c = document.getElementById("btn14");
            f41c.style.display = "none";
            let f41ca = document.getElementById("btn15");
            f41ca.style.display = "none";
            let f41cb = document.getElementById("btn16");
            f41cb.style.display = "none";
            let f41cc = document.getElementById("btn17");
            f41cc.style.display = "none";
            let f41cd = document.getElementById("btn18");
            f41cd.style.display = "none";
            let f41ce = document.getElementById("btn19");
            f41ce.style.display = "none";
            let f41cf = document.getElementById("btn20");
            f41cf.style.display = "none";
            let f41cg = document.getElementById("btn21");
            f41cg.style.display = "none";
        }
    </script>
    <div id="df3" onmouseover="handleHover1()">

<?php
// Include your database connection
include('connection.php');
// Fetch data from the MySQL table
$result = mysqli_query($connection,$sqe9);

?>

<table border="4">
    <tr>
        <td colspan="7" id="ww2">
<strong>SERVIDORES UNIAO DA VITORIA</strong>
    </td>
    </tr>
    <tr>
        <th>ID_Servidor</th>
        <th>Nome</th>
        <th>Funcao</th>
        <th>Ramal</th>
        <th>Celular</th>
        <th>Email</th>
        <th>Selecionar</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['ID_Servidor']}</td>";
        echo "<td>{$row['Nome']}</td>";
        echo "<td>{$row['Funcao']}</td>";
        echo "<td>{$row['Ramal']}</td>";
        echo "<td>{$row['Celular']}</td>";
        echo "<td>{$row['Email']}</td>";
        echo "<td><form action='Delete3.php' method='post'>
                  <input type='hidden' name='id10' value='{$row['ID_Servidor']}'>
                  <input type='submit'  id='sub1' value='Delete'>
                </form></td>";
        echo "</tr>";
    }
    ?>
</table>

</div>
</div>
</body>
</html>
