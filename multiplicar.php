<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablas de Multiplicar</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$tablas = [
    "primera" => 5,
    "segunda" => 13,
    "tercera" => 11
];

echo "<table>";
echo "<tr><th>Primera Tabla</th><th>Segunda Tabla</th><th>Tercera Tabla</th></tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    foreach ($tablas as $nombre => $numero) {
        $resultado = $numero * $i;
        echo "<td>{$numero} x {$i} = {$resultado}</td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
