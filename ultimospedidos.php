<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimos pedidos</title>
    <style>
        .item {
            border: 4px solid #FF69B4;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px #0000001a;
        }
        p{
            font-family: arial;
            font-size: 18px;
        }
        
        h1{
            margin-top: 10px!important;
            color: #FF1493;
            font-family: arial;
            font-size: 20px;
            align-items: center;
            text-align: center;
        }
        nav{
            width: 100%;
            height: 60px;
            background-color: #FFC0CB; 
        }
    </style>
</head>
<body>
    <nav>
        <h1>  ÚLTIMOS PEDIDOS  <h1>

    </nav>
    <br> <br>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "transitomalu";
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$sql = "SELECT * FROM pedidosultimos";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='item'>";       
        echo "<p><strong>Nome:</strong> " . $row["nome"] . "</p>";
        echo "<p><strong>Status:</strong> " . $row["status"] . "</p>";
        echo "<p><strong>Motivo:</strong> " . $row["motivo"] . "</p>";
        echo "<p><strong>Turma:</strong> " . $row["nome_turma"] . "</p>";
        echo "<p><strong>Data:</strong> " . $row["data"] . "</p>";

        echo "</div>";
    }
} else {
    echo "Nenhum resultado encontrado";
}
 
mysqli_close($conn);
?>

</body>
</html>
